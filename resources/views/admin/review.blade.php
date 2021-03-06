

@extends('layouts.admin')

@section('title', 'My Review')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">home</a>  </li>
                            <li class="breadcrumb-item"><a href="{{route('admin_review')}}">My Review</a>  </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    @include('home.message')
                </div>
                <div class="col-lg-10 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped ">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
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
                                    @foreach($datalist as $rs)
                                        <tr class="table-info">
                                            <td> {{ $rs->id }}</td>
                                            <td>
                                              <a href="{{route('admin_user_show',['id' =>$rs->user->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                            {{ $rs->user->name }}
                                             </a>
                                            </td>
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
                                            <td><a href="{{route('admin_review_show',['id' =>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"><img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a></td>
                                            <td> <a href="{{route('admin_review_delete',['id' =>$rs->id])}}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    ...
                </div>
            </div>
        </section>
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

