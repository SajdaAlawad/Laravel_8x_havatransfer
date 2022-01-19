@extends('layouts.home')
@section('title',$data->title. " Products List")
@section('description'){{ $data->description }} @endsection
@section('keywords',$data->keywords)

@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a> / <a href="{{route('home')}}">Vehicle List</a></li>
            <li class="active">{{ \App\Http\Controllers\admin\CategoryController::getParentsTree($data, $data->title) }} </li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
            <div class="content">
                <div class="container_12">
                    @foreach($datalist as $rs)
                    <div class="grid_3">
                            <div class="banner">
                                <img src="{{Storage::url($rs->image)}}" style="height:300px; width: 250px" alt="">
                                <div class="label">
                                    <div class="title">{{$rs->title}}</div>
                                    <div class="price">from<span>{{$rs->price_ticket}}</span></div>
                                    <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">LEARN MORE</a>
                                </div>
                            </div>
                      </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endsection
