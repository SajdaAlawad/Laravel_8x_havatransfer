@extends('layouts.home')

@section('title', 'References -' .$setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)
@section('css')
    <style>
        img
        {
            width: initial;

        }

    </style>
@endsection
@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> / <a href="{{route('references')}}">References</a></li>

            </ul>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="content">
                <div class="container_12">

                            {!! $setting->references !!}

                </div>
            </div>
        </div>
    </div>

@endsection
