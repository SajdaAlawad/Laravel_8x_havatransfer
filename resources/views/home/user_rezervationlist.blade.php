
@extends('layouts.home')
@section('title', 'My Rezervation')
@section('content')

    <div class="content1">
        <div class="container_12">
            <div class="container">
                        <ul class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">home</a>  </li>
                            <li class="breadcrumb-item"><a href="#">User Rezervation</a>  </li>
                        </ul>
             </div>
                <div class="grid_2">
                    @include('home.usermenu')
                </div>
                <div class="grid_10">
                    <div class="table-responsive ">
                        <div class="card">
                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email </th>
                                            <th>Phone</th>
                                            <th>Vehicle</th>
                                            <th>Airline</th>
                                            <th>From Where</th>
                                            <th>To Where </th>
                                            <th>Rezervation No</th>
                                            <th>Rezervation Date</th>
                                            <th>Rezervation Time</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th style="..." colspan="2">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($datalist as $rs)
                                            <tr class="table-info">
                                                <td> {{ $rs->id }}</td>
                                                <td> {{ $rs->name }}</td>
                                                <td>{{ $rs->email }} </td>
                                                <td> {{ $rs->phone }}</td>
                                                <td> {{ $rs->product_id }}</td>
                                                <td> {{ $rs->airline }}</td>
                                                <td> {{ $rs->from_location_id_id }}</td>
                                                <td> {{$rs->to_location_id_id}}</td>
                                                <td>{{$rs->rezervation_no}}</td>
                                                <td>{{$rs->rezervation_date}}</td>
                                                <td>{{$rs->rezervation_time}}</td>
                                                <td>{{$rs->total_price_id}}</td>
                                                <td> {{ $rs->status }}</td>
                                                <td><a href="{{route('user_rezervationlist_show',['id' =>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

              <div class="card-footer">
            ...
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

