@extends('layouts.home')
@section('title', 'User Profile')
@section('description')user page description @endsection
@section('content')
    <div class="content">
        <div class="container_12">
                <div class="container">
                    <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            <div class="grid_2">
                <h3>User Panel</h3>
                <div class=" ">
                    <li><a href="{{route('myprofile')}}">My Profile</a></li>
                    <li><a href="#">My Reservation</a></li>
                    <li><a href="#">My Shopcart</a></li>
                    <li><a href="#">My Messages</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </div>
            </div>
            <div class="grid_10 ">
                    @include('profile.show')
            </div>
        </div>
    </div>

@endsection