@extends('layouts.home')

@section('title', 'References -' .$setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">References</li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="container_12">
            <div class="grid_12">
                <div class=" ">
                    {!! $setting->references !!}
                </div>
            </div>
        </div>
    </div>

@endsection
