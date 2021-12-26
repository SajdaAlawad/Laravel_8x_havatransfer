@extends('layouts.home')

@section('title', 'About Us -' . $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="container_12">
            <div class="grid_12">
                <div class="row">
                    {!! $setting->aboutus !!}
                </div>
            </div>
        </div>
    </div>

@endsection
