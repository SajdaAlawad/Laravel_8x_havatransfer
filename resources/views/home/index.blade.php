
@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{ $setting->description }} @endsection
@section('keywords')
@section('slider')


@include('home._slider')
@endsection

@section('content')



@endsection
