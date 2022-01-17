<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
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
        $location = Location::all();
        return view('admin.location', compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $number1 = $data['long_location'] - $data['long1_location'];
//        $number2= $data['lat_location'] - $data['lat1_location'];
//        $data['total_price'] =$km->price_km* sqrt(($number1)*($number1) + ($number2)*($number2));
//        $res = Location::create($data);

        $data = $request->only('name','type','long_location','lat_location','status');
        Location::create($data);
        $location = Location::all();


        return view('admin.location', compact('location'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
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
        return view('admin.location_edit', compact('location'));

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
        $data = $request->only('name','type','long_location','lat_location','status');
        $location->update($data);
        $location = Location::all();
        return view('admin.location', compact('location'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illumnate\Http\Response
     */
    public function delete(Location $location)
    {
        $location->delete();
        $location = Location::all();
        return view('admin.location', compact('location'));

    }



}
