<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $products = Product::all();
        return view('home.location', compact('setting','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Location::all();
        return view('home.location', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $data = $request->only('product_id','from_location','to_location','lat_location','long_location','time','total_price', 'status','long1_location','lat1_location');
        $data['user_id'] = auth()->user()->id;
        $number1 = $data['long_location'] - $data['long1_location'];
        $number2 = $data['lat_location']-$data['lat1_location'];
        $data['total_price'] = $number1 + $number2;
         $res = Location::create($data);

        return redirect()->route('user_products')->with('success','Location added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }


    public function takeVehcile($id)
    {
        $vichle = Product::query()->findOrFail($id);
        $setting = Setting::first();
        return view('home.selected_vichele', compact('vichle','setting'));
    }
}
