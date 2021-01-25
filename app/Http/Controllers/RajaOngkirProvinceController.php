<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RajaOngkirProvince;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class RajaOngkirProvinceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RajaOngkirProvince $raja_ongkir_provinces)
    {
        // parent::__construct();
        $this->raja_ongkir_provinces = $raja_ongkir_provinces;
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
     * Show RajaOngkirProvince for select2.
     */
    public function select2(Request $request)
    {
        $search = (string)($request->search != null ? $request->search : null);
        $provinces = RajaOngkir::provinsi();
        if ($search == null) {
            $provinces = $provinces->all();
        } else {
            $provinces = $provinces->search($search)->get();
        }

        $items = array_map(function ($item) {
            return ['id' => $item['province_id'], 'text' => $item['province']];
        }, $provinces);
        $data = [
            'total_count' => count($items),
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
