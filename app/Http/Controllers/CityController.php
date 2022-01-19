<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\City;
//use App\Models\Location;
//use Illuminate\Http\Request;
//
//class CityController extends Controller
//{
//    public function index()
//    {
//        $cities = City::all();
//        return view('admin.city', compact('cities'));
//    }
//
//    public function create()
//    {
//        return view('admin.city_add');
//    }
//    public function store(Request $request)
//    {
//        $data = $request->only('name','description','lang','lat','status');
//        City::create($data);
//        $cities = City::all();
//        return view('admin.city', compact('cities'));
//    }
//
//    public function edit(City $city)
//    {
//        return view('admin.city_edit', compact('city'));
//    }
//
//    public function update(City $city, Request $request)
//    {
//        $data = $request->only('name','description','lang','lat','status');
//        $city->update($data);
//        $cities = City::all();
//        return view('admin.city', compact('cities'));
//    }
//
//    public function delete(City $city)
//    {
//        $city->delete();
//        $cities = City::all();
//        return view('admin.city', compact('cities'));
//
//    }
//}
