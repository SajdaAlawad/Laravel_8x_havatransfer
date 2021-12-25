@extends('layouts.home')
@section('title',$setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Blank</li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            icerik alani
        </div>
    </div>
</div>
@endsection
