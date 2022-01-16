<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Rezervation;
use App\Models\Rezervationlist;
use App\Models\Setting;
use Illuminate\Http\Request;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

class RezervationlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist= Rezervation::all();
        return view('admin.rezervationlist', ['datalist'=>$datalist]);
    }

    public function list( $status)
    {
        $datalist = Rezervation::where('status',$status)->get();
        return view('admin.rezervationlist',['datalist'=>$datalist]);
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
     * @param  \App\Models\Rezervationlist  $rezervationlist
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervationlist $rezervationlist,$id)
    {
        $data = Rezervationlist::find($id)->get();
        return view('admin.revervationlist',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervationlist  $rezervationlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervationlist $rezervationlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervationlist  $rezervationlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervationlist $rezervationlist,$id)
    {
        $data = Rezervationlist::find($id)->get();
        $data->status =$request->input('status');
        $data->note   =$request->input('note');
        $data->save();
        return redirect()->with('success','Rezervation Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervationlist  $rezervationlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervationlist $rezervationlist)
    {
        //
    }
}
