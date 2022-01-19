
@extends('layouts.home')
@section('description')user reviews @endsection



@section('title', 'My Review')
{{--@section('css')--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
{{--@endsection--}}
@section('content')

    <div class="content1">
        <div class="container_12">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a> / <a href="{{route('myreviews')}}">My Reviews</a></li>
                </ul>
            </div>
            <div class="grid_3">
                @include('home.usermenu')
            </div>
            <div class="grid_9">
                <div class="table-responsive ">
                    <div class="card">
                        <table class="table table-bordered table-striped ">
                            <thead>
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Product</th>
                                <th>Subject </th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th style="..." colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                <tr class="table-info">
                                    <td> {{ $rs->id }}</td>
                                    <td>
                                        <a href="{{route('product',['id' =>$rs->product->id,'slug'=> $rs->product->slug])}}" target="_blank">
                                            {{$rs->product->title}}
                                        </a>
                                    </td>
                                    <td> {{ $rs->subject }}</td>
                                    <td>{{ $rs->review }} </td>
                                    <td> {{ $rs->rate }}</td>
                                    <td> {{ $rs->status }}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td> <a href="{{route('admin_review_delete',['id' =>$rs->id])}}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         </div>
    </div>

@endsection
@section('footer')
    <script src="{{asset('assets')}}/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
    <script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
    <script src="{{asset('assets')}}/admin/js/template.js"></script>
    <script src="{{asset('assets')}}/admin/js/settings.js"></script>
    <script src="{{asset('assets')}}/admin/js/todolist.js"></script>
    <!-- endinject -->
@endsection

