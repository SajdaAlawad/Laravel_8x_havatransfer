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
        $datalist = Rezervation::where('user_id',Auth::id());
        return view('home.user_rezervationlist',['setting'=>$setting,'datalist'=>$datalist]);
        return view('home.user_rezervationlist', compact('setting'));
    }
    public function fromto($id)
    {

        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $reviews = Review::where('product_id',$id)->get();
        //print_r($data);
        #exit();
        return view('home.fromto',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);

    }
    public function A2C($id)
    {
        $setting = Setting::first();
        $datalist1 = Location::where('type','airport')->get();
        $datalist2 = Location::where('type','city')->get();

        $vichle = Product::find($id);
        return view('home.selected_vichele',['setting'=>$setting,'vichle'=>$vichle,'datalist1'=>$datalist1,'datalist2'=>$datalist2]);
        //return view('home.user_rezervationlist', compact('setting'));
    }
    public function C2A($id)
    {
        $setting = Setting::first();
        $datalist2 = Location::where('type','airport')->get();
        $datalist1 = Location::where('type','city')->get();
        $vichle = Product::find($id);
        return view('home.selected_vichele',['setting'=>$setting,'vichle'=>$vichle,'datalist1'=>$datalist1,'datalist2'=>$datalist2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $total_price = $request->input('total_price_id');
         return view('home.user_rezervation',['total_price_id'=>$total_price]);
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
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->from_location_id_id = $request->input('from_location_id_id');
        $data->to_location_id_id = $request->input('to_location_id_id');
        $data->total_price_id = $request->input('total_price_id');
        $data->airline = $request->input('airline');
        $data->rezervation_no = $request->input('rezervation_no');
        $data->rezervation_date = $request->input('rezervation_date');
        $data->rezervation_time = $request->input('rezervation_time');
        $data->pickup_time= $request->input('pickup_time');
        $data->note = $request->input('note');
        $data->IP = $_SERVER('REMOTE_ADDR');
        $data->save();
        return redirect()->route('user_rezervation')->with('success','Vehicle Reserved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervation $rezervation)
    {
//        $setting = Setting::first();
//        return view('home.user_rezervationlist', compact('setting'));
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

