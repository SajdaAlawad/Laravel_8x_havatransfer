@extends('layouts.home')
@section('title',$data->title. " Products List")
@section('description'){{ $data->description }} @endsection
@section('keywords',$data->keywords)

@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('home')}}">Vehicle List</a></li>
            <li class="active">{{ \App\Http\Controllers\admin\CategoryController::getParentsTree($data, $data->title) }} </li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
         @foreach($datalist as $rs)
            <div class="content">
                <div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
                <div class="container_12">
                    <div class="banners">
                        <div class="grid_4">
                            <div class="banner">
                                <img src="{{Storage::url($rs->image)}}" alt="">
                                <div class="label">
                                    <div class="title">NEW ZEALAND</div>
                                    <div class="price">from<span>{{$rs->price_ticket}}</span></div>
                                    <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
