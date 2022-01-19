
@extends('layouts.home')

@section('title', $setting->title.' / Home')
@section('description'){{ $setting->description }} @endsection
@section('keywords', $setting->keywords)

@include('home._slider')
@section('content')

    <div class="container_12">
        @foreach($daily as $rs)
        <div class="grid_4">
            <div class="banner">
                <img src="{{ Storage::url($rs->image)}}" style="height:300px " alt="">
                <div class="label">
                    <div class="title">{{$rs->title}}</div>
                    <div class="price">Price<span>{{$rs->price_km}}</span></div>
                    <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">Learn more</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="clear"></div>

        <div class="grid_12">
            <h3 >Latest Vehicle</h3>
        </div>
            @foreach($last as $rs)
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{ Storage::url($rs->image)}}" style="height:300px; width: 263px;" alt="">
                        <div class="label">
                            <div class="title">{{$rs->title}}</div>
                            <div class="price">Price<span>{{$rs->price_km}}</span></div>
                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">Learn more</a>
                        </div>
                    </div>
                </div>

        @endforeach
    </div>

@endsection
