<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\City;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index()
    {
        $airports = Airport::query()->with('city')->get();
        return view('admin.airport', compact('airports'));
    }


    public function create()
    {
        $cities = City::all();
        return view('admin.airport_add', compact('cities'));
    }


    public function store(Request $request)
    {
        $data = $request->only('name', 'city_id', 'description', 'lang', 'lat');
        Airport::create($data);

        $airports = Airport::query()->with('city')->get();
        return view('admin.airport', compact('airports'));
    }

    public function edit(Airport $airport)
    {
        $cities = City::all();
        return view('admin.airport_edit', compact('airport','cities'));
    }

    public function update(Airport $airport, Request $request)
    {

        $data = $request->only('name', 'city_id', 'description', 'lang', 'lat');
        $airport->update($data);
        $airports = Airport::query()->with('city')->get();
        return view('admin.airport', compact('airports'));
    }

    public function delete(Airport $airport)
    {
        $airport->delete();
        $airports = Airport::query()->with('city')->get();
        return view('admin.airport', compact('airports'));

    }
}
