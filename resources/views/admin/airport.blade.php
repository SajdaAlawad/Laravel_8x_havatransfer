@extends('layouts.admin')

@section('title', 'Airport List')

@section('content')

   <div class="content-wrapper">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
               <div class="col-sm-6">
                   <h3>Taxi</h3>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="#">home</a>  </li>
                       <li class="breadcrumb-item"><a href="#">Airport</a>  </li>
                   </ol>
               </div>
           </div>
        </div>
       </section>

       <section class="content">
           <div class="card">
               <div class="card-header">
                  <!-- <a href="" type="button" class="btn btn-block btn-info" style="width: 200px">Add Category</a> -->
                   <a href="{{ route('admin_airport_create') }}" type="button" class="btn btn-inverse-info btn-fw" style="width:200px">Add Airport</a>
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
                                       <th>City</th>
                                       <th>Description </th>
                                       <th>lang </th>
                                       <th>lat </th>
                                       <th style="..." colspan="2">Actions</th>
                                   </tr>
                                   </thead>
                                   <tbody>

                                   @foreach($airports as $rs)
                                     <tr class="table-info">
                                       <td> {{ $rs->id }}</td>
                                       <td> {{ $rs->name }}</td>
                                       <td> {{ $rs->city->name }}</td>
                                       <td> {{ $rs->description }}</td>
                                       <td> {{ $rs->lang }}</td>
                                       <td> {{ $rs->lat }}</td>
                                       <td> {{ $rs->status == true ?'True':'False' }}</td>

                                       <td><a href="{{ route('admin_airport_edit',['airport'=>$rs->id]) }}"><img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a></td>
                                       <td> <a href="{{ route('delete.airport',['airport' => $rs->id]) }}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></td>
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
