<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use App\Models\Product;
use App\Models\Rezervation;
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
        $data = $request->only('product_id','from','to','time','rezervation_no','airline','rezervation_date','pickup_time');
        $data['user_id'] = auth()->user()->id;
        $data['phone'] = auth()->user()->phone;
        $data['name'] = auth()->user()->name;
        $data['email'] = auth()->user()->email;
        $res = new Rezervation();
        $res->user_id = auth()->user()->id;
        $res->phone = auth()->user()->phone;
        $res->name  = auth()->user()->name;
        $res->email = auth()->user()->email;
        $res->from_location_id_id =$request->input('product_id');
        $res = Location::create($data);
        return redirect()->route('user_rezervations')->with('success','Location added');
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

//
//    public function takeVehcile($id)
//    {
//        $vichle = Product::query()->findOrFail($id);
//        $setting = Setting::first();
//        return view('home.selected_vichele', compact('vichle','setting'));
//    }
}
