<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AccountSettingsRequest;
use App\Http\Requests\UserBillingRequest;
use App\Http\Requests\UserShippingRequest;
use Ramsey\Uuid\Uuid;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Auth;
use DataTables;
use App\User;
use App\UserBillingAddress;
use App\UserShippingAddress;
use App\RajaOngkirCity;
use App\RajaOngkirProvince;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        UserBillingAddress $user_billing_address,
        UserShippingAddress $user_shipping_address
    )
    {
        $this->middleware('auth');
        $this->user_billing_address = $user_billing_address;
        $this->user_shipping_address = $user_shipping_address;
    }

    /**
     * Show the application dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $greetings = '';
        $hour = date('H', time());

        if ($hour > 04 && $hour <= 11) {
            $greetings = '<i class="fas fa-cloud-sun"></i> Good Morning, <b>'.Auth::user()->name.'</b>.';
        } else if ($hour > 11 && $hour <= 17) {
            $greetings = '<i class="fas fa-sun"></i> Good Afternoon, <b>'.Auth::user()->name.'</b>.';
        } else if ($hour > 17 && $hour <= 21) {
            $greetings = '<i class="fas fa-cloud-moon"></i> Good Evening, <b>'.Auth::user()->name.'</b>.';
        } else if ($hour > 21 && $hour <= 04) {
            $greetings = '<i class="fas fa-moon"></i> Good Night, <b>'.Auth::user()->name.'</b>.';
        } else {
            $greetings = '<i class="fas fa-moon"></i> Good Night, <b>'.Auth::user()->name.'</b>.';
        }

        $data = array(
            'user_billing_address'  =>  $this->user_billing_address->with('raja_ongkir_provinces')->with('raja_ongkir_cities')->where('user_id', Auth::user()->id)->get(),
            'user_shipping_address' =>  $this->user_shipping_address->where('user_id', Auth::user()->id)->get(),
            'my_account'            =>  User::find(Auth::user()->id),
            'greetings'             =>  $greetings
        );

        if ($request->ajax()) {
            // $shipping_address = $this->user_shipping_address->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
            $req_search = (string) ($request->search['value'] != null ? $request->search['value'] : null);
            $select_query = [
                \DB::raw('id AS id'),
                \DB::raw('address_name'),
                \DB::raw('receiver_name'),
                \DB::raw('phone_number'),
                \DB::raw('updated_at'),
            ];

            $order_column = [
                'id',
                'address_name',
                'receiver_name',
                'phone_number',
                'updated_at'
            ];
            $raw_columns = ['action'];

            $shipping = $this->user_shipping_address
                ->where('user_id', Auth::user()->id)
                ->orderBy('created_at', 'desc');

            if ($req_search) {
                $shipping = $shipping
                    ->where('address_name', 'like', '%'.$req_search.'%')
                    ->orWhere('receiver_name', 'like', '%'.$req_search.'%')
                    ->orWhere('phone_number', 'like', '%'.$req_search.'%')
                    ->orWhere('updated_at', 'like', '%'.$req_search.'%');
            }
            // counter
            $counter = $shipping;
            $counter = $counter->count();
            // order manual data
            if (isset($request->order[0]['column'])) {
                if ($request->order[0]['column'] != "0") {
                    $order_dir = (isset($request->order[0]['dir']) ? $request->order[0]['dir'] : 'asc');
                    $shipping = $shipping->orderBy($order_column[(int)$request->order[0]['column']], $order_dir);
                }
            }

            $limit = (isset($request->length) ? ((int)$request->length > 0 ? $request->length : $counter) : 10);
            $start = (isset($request->start) ? (int)$request->start : 0);
            $page = ((int)$start / (int)$limit) + 1;

            $request->merge([
                "search" => [
                    "regex" => "false",
                    "value" => null
                ]
            ]);

            $shipping = $shipping->select($select_query);

            // pagination model data
            $shipping = $shipping->paginate($limit, $select_query, 'page', $page);
            $total = $shipping->total();
            $shipping = $shipping->getCollection();
            return Datatables::of($shipping)
                ->addIndexColumn()
                ->addColumn('action', function($data) {
                    $action = '<div class="btn-group" role="group">';
                    $action .= '<a
                                    title="Edit"
                                    class="btn btn-flat btn-xs btn-primary"
                                    href="/account/edit/shipping/'.$data->id.'"
                                >
                                    <i class="fas fa-edit"></i>
                                </a>';
                    $action .= '<button
                                    type="button"
                                    title="Delete"
                                    id="'.$data->id.'"
                                    name="destroy"
                                    class="destroy btn btn-flat btn-xs btn-danger"
                                >
                                    <i class="fas fa-trash-alt"></i>
                                </button>';
                    $action .= '</div>';
                    return $action;
                })
                ->editColumn('updated_at', '{{ \Carbon\Carbon::parse($updated_at)->isoFormat("LLLL") }}')
                ->skipPaging()
                ->setTotalRecords($counter)
                ->setFilteredRecords($counter)
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('user.dashboard')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_billing()
    {
        return view('user.addresses.billing.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\UserBillingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_billing(UserBillingRequest $request)
    {
        $province_uuid4 = Uuid::uuid4();
        $city_uuid4 = Uuid::uuid4();
        $uuid4 = Uuid::uuid4();
        $province = RajaOngkir::provinsi()->find($request->province_id);
        $city = RajaOngkir::kota()->find($request->city_id);
        $raja_ongkir_province = 0;
        $raja_ongkir_city = 0;
        $province_id = 0;
        $city_id = 0;

        if ($request->country == 'id') {
            $raja_ongkir_province = RajaOngkirProvince::where('code', $request->province_id)->first();
            $raja_ongkir_city = RajaOngkirCity::where('code', $request->city_id)->first();
        }

        if ($request->country == 'id' && !$raja_ongkir_province) {
            $province_id = RajaOngkirProvince::firstOrCreate([
                'id'    =>  $province_uuid4->toString(),
                'code'  =>  (isset($province['province_id']) ? $province['province_id'] : ''),
                'name'  =>  (isset($province['province']) ? $province['province'] : ''),
            ])->id;
        }
        if ($request->country == 'id' && !$raja_ongkir_city) {
            $city_id = RajaOngkirCity::firstOrCreate([
                'id'            =>  $city_uuid4->toString(),
                'code'          =>  (isset($city['city_id']) ? $city['city_id'] : ''),
                'province_code' =>  (isset($city['province_id']) ? $city['province_id'] : ''),
                'name'          =>  (isset($city['city_name']) ? $city['city_name'] : ''),
                'type'          =>  (isset($city['type']) ? $city['type'] : ''),
                'postal_code'   =>  (isset($city['postal_code']) ? $city['postal_code'] : ''),
            ])->id;
        }

        $data = array(
            'id'            =>  $uuid4->toString(),
            'user_id'       =>  Auth::user()->id,
            'firstname'     =>  $request->firstname,
            'lastname'      =>  $request->lastname,
            'country'       =>  $request->country,
            'address'       =>  $request->address,
            'province_id'   =>  ($request->country == 'id' ? ($raja_ongkir_province ? $raja_ongkir_province->id : $province_id) : ''),
            'city_id'       =>  ($request->country == 'id' ? ($raja_ongkir_city ? $raja_ongkir_city->id : $city_id) : ''),
            'postal_code'   =>  $request->postal_code,
            'phone_number'  =>  $request->phone_number,
            'email'         =>  $request->email
        );
        $billing = $this->user_billing_address->create($data);
        return response()->json([
            'success' => true,
            'billing_create' => $billing
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_shipping()
    {
        return view('user.addresses.shipping.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\UserShippingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_shipping(UserShippingRequest $request)
    {
        $province_uuid4 = Uuid::uuid4();
        $city_uuid4 = Uuid::uuid4();
        $uuid4 = Uuid::uuid4();
        $province = RajaOngkir::provinsi()->find($request->province_id);
        $city = RajaOngkir::kota()->find($request->city_id);
        $raja_ongkir_province = 0;
        $raja_ongkir_city = 0;
        $province_id = 0;
        $city_id = 0;

        if ($request->country == 'id') {
            $raja_ongkir_province = RajaOngkirProvince::where('code', $request->province_id)->first();
            $raja_ongkir_city = RajaOngkirCity::where('code', $request->city_id)->first();
        }

        if ($request->country == 'id' && !$raja_ongkir_province) {
            $province_id = RajaOngkirProvince::firstOrCreate([
                'id'    =>  $province_uuid4->toString(),
                'code'  =>  (isset($province['province_id']) ? $province['province_id'] : ''),
                'name'  =>  (isset($province['province']) ? $province['province'] : ''),
            ])->id;
        }
        if ($request->country == 'id' && !$raja_ongkir_city) {
            $city_id = RajaOngkirCity::firstOrCreate([
                'id'            =>  $city_uuid4->toString(),
                'code'          =>  (isset($city['city_id']) ? $city['city_id'] : ''),
                'province_code' =>  (isset($city['province_id']) ? $city['province_id'] : ''),
                'name'          =>  (isset($city['city_name']) ? $city['city_name'] : ''),
                'type'          =>  (isset($city['type']) ? $city['type'] : ''),
                'postal_code'   =>  (isset($city['postal_code']) ? $city['postal_code'] : ''),
            ])->id;
        }

        $data = array(
            'id'            =>  $uuid4->toString(),
            'user_id'       =>  Auth::user()->id,
            'address_name'  =>  $request->address_name,
            'receiver_name' =>  $request->receiver_name,
            'country'       =>  $request->country,
            'address'       =>  $request->address,
            'province_id'   =>  ($request->country == 'id' ? ($raja_ongkir_province ? $raja_ongkir_province->id : $province_id) : ''),
            'city_id'       =>  ($request->country == 'id' ? ($raja_ongkir_city ? $raja_ongkir_city->id : $city_id) : ''),
            'postal_code'   =>  $request->postal_code,
            'phone_number'  =>  $request->phone_number
        );
        $shipping = $this->user_shipping_address->create($data);
        return response()->json([
            'success' => true,
            'shipping_create' => $shipping
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_billing($id)
    {
        $billing = $this->user_billing_address->with('raja_ongkir_provinces')->with('raja_ongkir_cities')->findOrFail($id);
        return view("user.addresses.billing.form", ['billing' => $billing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\UserBillingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update_billing(UserBillingRequest $request, $id)
    {
        $province_uuid4 = Uuid::uuid4();
        $city_uuid4 = Uuid::uuid4();
        $uuid4 = Uuid::uuid4();
        $province = RajaOngkir::provinsi()->find($request->province_id);
        $city = RajaOngkir::kota()->find($request->city_id);
        $user_billing = $this->user_billing_address->find($id)->first();
        $raja_ongkir_province = 0;
        $raja_ongkir_city = 0;
        $province_id = 0;
        $city_id = 0;

        if ($request->country == 'id') {
            $raja_ongkir_province = RajaOngkirProvince::where('code', $request->province_id)->first();
            $raja_ongkir_city = RajaOngkirCity::where('code', $request->city_id)->first();
        }

        if ($request->country == 'id' && !$raja_ongkir_province) {
            $province_id = RajaOngkirProvince::firstOrCreate([
                'id'    =>  $province_uuid4->toString(),
                'code'  =>  (isset($province['province_id']) ? $province['province_id'] : ''),
                'name'  =>  (isset($province['province']) ? $province['province'] : ''),
            ])->id;
        }
        if ($request->country == 'id' && !$raja_ongkir_city) {
            $city_id = RajaOngkirCity::firstOrCreate([
                'id'            =>  $city_uuid4->toString(),
                'code'          =>  (isset($city['city_id']) ? $city['city_id'] : ''),
                'province_code' =>  (isset($city['province_id']) ? $city['province_id'] : ''),
                'name'          =>  (isset($city['city_name']) ? $city['city_name'] : ''),
                'type'          =>  (isset($city['type']) ? $city['type'] : ''),
                'postal_code'   =>  (isset($city['postal_code']) ? $city['postal_code'] : ''),
            ])->id;
        }

        $data = array(
            'id'            =>  $uuid4->toString(),
            'user_id'       =>  Auth::user()->id,
            'firstname'     =>  $request->firstname,
            'lastname'      =>  $request->lastname,
            'country'       =>  $request->country,
            'address'       =>  $request->address,
            'province_id'   =>  ($request->country == 'id' ? ($user_billing->province_id == ($raja_ongkir_province ? $raja_ongkir_province->id : $province_id) ? $user_billing->province_id : (!$raja_ongkir_province ? $province_id : $raja_ongkir_province->id)) : ''),
            'city_id'       =>  ($request->country == 'id' ? ($user_billing->city_id == ($raja_ongkir_city ? $raja_ongkir_city->id : $city_id) ? $user_billing->city_id : (!$raja_ongkir_city ? $city_id : $raja_ongkir_city->id)) : ''),
            'postal_code'   =>  $request->postal_code,
            'phone_number'  =>  $request->phone_number,
            'email'         =>  $request->email
        );
        $billing = $this->user_billing_address->find($id)->update($data);
        return response()->json([
            'success' => true,
            'billing_update' => $billing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_shipping($id)
    {
        $shipping = $this->user_shipping_address->with('raja_ongkir_provinces')->with('raja_ongkir_cities')->findOrFail($id);
        return view("user.addresses.shipping.form", ['shipping' => $shipping]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\UserShippingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update_shipping(UserShippingRequest $request, $id)
    {
        $province_uuid4 = Uuid::uuid4();
        $city_uuid4 = Uuid::uuid4();
        $uuid4 = Uuid::uuid4();
        $province = RajaOngkir::provinsi()->find($request->province_id);
        $city = RajaOngkir::kota()->find($request->city_id);
        $user_shipping = $this->user_shipping_address->find($id)->first();
        $raja_ongkir_province = 0;
        $raja_ongkir_city = 0;
        $province_id = 0;
        $city_id = 0;

        if ($request->country == 'id') {
            $raja_ongkir_province = RajaOngkirProvince::where('code', $request->province_id)->first();
            $raja_ongkir_city = RajaOngkirCity::where('code', $request->city_id)->first();
        }

        if ($request->country == 'id' && !$raja_ongkir_province) {
            $province_id = RajaOngkirProvince::firstOrCreate([
                'id'    =>  $province_uuid4->toString(),
                'code'  =>  (isset($province['province_id']) ? $province['province_id'] : ''),
                'name'  =>  (isset($province['province']) ? $province['province'] : ''),
            ])->id;
        }
        if ($request->country == 'id' && !$raja_ongkir_city) {
            $city_id = RajaOngkirCity::firstOrCreate([
                'id'            =>  $city_uuid4->toString(),
                'code'          =>  (isset($city['city_id']) ? $city['city_id'] : ''),
                'province_code' =>  (isset($city['province_id']) ? $city['province_id'] : ''),
                'name'          =>  (isset($city['city_name']) ? $city['city_name'] : ''),
                'type'          =>  (isset($city['type']) ? $city['type'] : ''),
                'postal_code'   =>  (isset($city['postal_code']) ? $city['postal_code'] : ''),
            ])->id;
        }

        $data = array(
            'id'            =>  $uuid4->toString(),
            'user_id'       =>  Auth::user()->id,
            'address_name'  =>  $request->address_name,
            'receiver_name' =>  $request->receiver_name,
            'country'       =>  $request->country,
            'address'       =>  $request->address,
            'province_id'   =>  ($request->country == 'id' ? ($user_shipping->province_id == ($raja_ongkir_province ? $raja_ongkir_province->id : $province_id) ? $user_shipping->province_id : (!$raja_ongkir_province ? $province_id : $raja_ongkir_province->id)) : ''),
            'city_id'       =>  ($request->country == 'id' ? ($user_shipping->city_id == ($raja_ongkir_city ? $raja_ongkir_city->id : $city_id) ? $user_shipping->city_id : (!$raja_ongkir_city ? $city_id : $raja_ongkir_city->id)) : ''),
            'postal_code'   =>  $request->postal_code,
            'phone_number'  =>  $request->phone_number,
        );
        $shipping = $this->user_shipping_address->find($id)->update($data);
        return response()->json([
            'success' => true,
            'shipping_update' => $shipping
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_shipping($id)
    {
        $data = $this->user_shipping_address->findOrFail($id);
        $data->delete();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\AccountSettingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update_account_settings(AccountSettingsRequest $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        if ($request->old_password == null &&
            $request->password == null &&
            $request->password_confirmation == null
        ) {
            $data = array(
                'name'          =>  $request->name,
                'phone_number'  =>  $request->phone_number,
                'email'         =>  $request->email
            );
            $user->update($data);
            return response()->json(['success' => true]);
        } else {
            if (Hash::check($request->old_password, $user->password)) {
                $data = array(
                    'name'          =>  $request->name,
                    'phone_number'  =>  $request->phone_number,
                    'email'         =>  $request->email,
                    'password'      =>  Hash::make($request->password)
                );
                $user->update($data);
                return response()->json(['success' => true]);
            } else {
                return response()->json([
                    'success'   =>  false,
                    'message'   =>  'The given data was invalid.',
                    'errors'    =>  ['old_password' => ['Invalid old password.']]
                ], 422);
            }
        }
    }
}
