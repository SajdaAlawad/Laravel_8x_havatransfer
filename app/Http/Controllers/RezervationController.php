<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Location;
use App\Models\Product;
use App\Models\Review;
use App\Models\Rezervation;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $datalist = Rezervation::where('user_id',Auth::id())->get();
        //dd($datalist);
        return view('home.user_rezervationlist',['setting'=>$setting,'datalist'=>$datalist]);

    }
    public function fromto()
    {
        $setting = Setting::first();
        $fromlist = Location::where('type','city')->get();
        $tolist = Location::where('type','airport')->get();
        $cars = Product::all();
        return view('home.user_rezervation',['setting'=>$setting,'cars'=>$cars,'fromlist'=>$fromlist,'tolist'=>$tolist]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $setting = Setting::first();
        $fromlist = Location::where('type','airport')->get();
        $tolist = Location::where('type','city')->get();
        $cars = Product::all();

        return view('home.user_rezervation',['setting'=>$setting,'cars'=>$cars,'fromlist'=>$fromlist,'tolist'=>$tolist]);
    }
    public function create_car($id)
    {
        $setting = Setting::first();
        $fromlist = Location::where('type','airport')->get();
        $tolist = Location::where('type','city')->get();
        $cars = Product::all();

        return view('home.user_rezervation_c',['setting'=>$setting,'cars'=>$cars,'fromlist'=>$fromlist,'tolist'=>$tolist,'car_id'=>$id]);
    }
    public function fromto_car($id)
    {
        $setting = Setting::first();
        $fromlist = Location::where('type','city')->get();
        $tolist = Location::where('type','airport')->get();
        $cars = Product::all();
        return view('home.user_rezervation_c',['setting'=>$setting,'cars'=>$cars,'fromlist'=>$fromlist,'tolist'=>$tolist,'car_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Rezervation();
        $km = Product::find($request->input('product_id'));
        $from=Location::find($request->input('from_location_id_id'));
        $to=Location::find($request->input('to_location_id_id'));
        $number1 = $to->long_location - $from->long_location;
        $number2= $to->lat_location - $from->lat_location;
        $data->total_price_id = $km->price_km* sqrt(($number1)*($number1) + ($number2)*($number2));
        $data->user_id = Auth::id();
        $data->phone = Auth::user()->phone;
        $data->name  = Auth::user()->name;
        $data->email = Auth::user()->email;
        $data->product_id = $request->input('product_id');
        $data->from_location_id_id = $request->input('from_location_id_id');
        $data->to_location_id_id = $request->input('to_location_id_id');
        $data->airline = $request->input('airline');
        $data->rezervation_no = $request->input('rezervation_no');
        $data->rezervation_date = $request->input('rezervation_date');
        $data->pickup_time= $request->input('pickup_time');
        $data->note = $request->input('note');
        $data->IP = $this->getIp();
        $data->save();
        return redirect()->route('user_rezervations')->with('success','Vehicle Reserved Successfully');
    }
    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervation $rezervation)
    {
        $setting = Setting::first();
        return view('home.user_rezervationlist', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervation $rezervation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervation $rezervation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervation $rezervation)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {

        $data = array(
            "Airport",
            "City"
        );
        $total_price = $request->input('total_price_id');
        return view('home.user_rezervation',['total_price_id'=>$total_price,'data',$data]);
        return view('dropdown', compact('data'));
    }

    /**
     * return states list.
     *
     * @return json
     */
    public function finalsubmit(Request $request)
    {
        $states = DB::table('states')
            ->where('country_id', $request->country_id)
            ->get();

        if (count($states) > 0) {
            return response()->json($states);
        }
    }

    /**
     * return cities list
     *
     * @return json
     */
    public function getCities(Request $request)
    {
        $cities = DB::table('cities')
            ->where('state_id', $request->state_id)
            ->get();

        if (count($cities) > 0) {
            return response()->json($cities);
        }
    }
}

