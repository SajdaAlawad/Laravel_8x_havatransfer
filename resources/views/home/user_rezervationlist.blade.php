
@extends('layouts.home')
@section('title', 'My Reservation')
@section('content')

    <div class="content1">
        <div class="container_12">
            <div class="container">
                <ul class="breadcrumb">
                    <li ><a href="{{route('home')}}">home</a> /<a href="{{route('user_rezervations')}}">User Reservation</a></li>
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
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email </th>
                                            <th>Phone</th>
                                            <th>Vehicle</th>
                                            <th>Airline</th>
                                            <th>From Where</th>
                                            <th>To Where </th>
                                            <th>Reservation No</th>
                                            <th>Reservation Date&Time</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($datalist as $rs)
                                            <tr class="table-info">
                                                <td> {{ $rs->id }}</td>
                                                <td> {{ $rs->name }}</td>
                                                <td>{{ $rs->email }} </td>
                                                <td> {{ $rs->phone }}</td>
                                                <td> {{ $rs->product->title }}</td>
                                                <td> {{ $rs->airline }}</td>
                                                <td> {{ $rs->from_location_id->name }}</td>
                                                <td> {{$rs->to_location_id->name}}</td>
                                                <td>{{$rs->rezervation_no}}</td>
                                                <td>{{$rs->rezervation_date}}</td>
                                                <td>{{$rs->total_price_id}}</td>
                                                <td> {{ $rs->status }}</td>
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
    <script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
    <script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
    <script src="{{asset('assets')}}/admin/js/template.js"></script>
    <script src="{{asset('assets')}}/admin/js/settings.js"></script>
    <script src="{{asset('assets')}}/admin/js/todolist.js"></script>
    <!-- endinject -->
@endsection

