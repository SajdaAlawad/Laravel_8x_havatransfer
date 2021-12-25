@extends('layouts.home')
@section('title', 'user profile')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">User Profile</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>

                <div id="aside" class="col-md-10">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>

@endsection
