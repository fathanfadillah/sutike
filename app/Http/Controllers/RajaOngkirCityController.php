<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RajaOngkirCity;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class RajaOngkirCityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RajaOngkirCity $raja_ongkir_cities)
    {
        // parent::__construct();
        $this->raja_ongkir_cities = $raja_ongkir_cities;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show RajaOngkirCity for select2.
     */
    public function select2(Request $request)
    {
        $province_id = (isset($request->province_id) ? (is_numeric($request->province_id) ? $request->province_id : null) : null);
        $search = (string)($request->search != null ? $request->search : null);
        $cities = RajaOngkir::kota();
        if ($province_id != null) {
            $cities = $cities->dariProvinsi($province_id);
            if ($search != null) {
                $cities = $cities->search($search);
            }
            $cities = $cities->get();
        } else {
            if ($search == null) {
                $cities = $cities->all();
            } else {
                $cities = $cities->search($search)->get();
            }
        }
        $items = array_map(function ($item) {
            return ['id' => $item['city_id'], 'text' => $item['type'].' '.$item['city_name']];
        }, $cities);
        $data = [
            'total_count' => count($cities),
            'incomplete_results' => false,
            'items' => $items,
        ];
        return json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
