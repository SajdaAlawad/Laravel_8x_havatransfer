@extends('layouts.admin')

@section('title', 'Location List')

@section('content')

   <div class="content-wrapper">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
               <div class="col-sm-6">
                   <h3>Location</h3>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href={{route('admin_home')}}">home</a>  </li>
                       <li class="breadcrumb-item"><a href="{{route('admin_location')}}">Location</a>  </li>
                   </ol>
               </div>
           </div>
        </div>
       </section>


       <section class="content">
           <div class="card">
               <div class="card-header">
                   <a href="{{ route('admin_location_create') }}" type="button" class="btn btn-inverse-info btn-fw" style="width:200px">Add Location</a>
               </div>
               <div class="col-lg-12 stretch-card">
                   <div class="card">
                       <div class="card-body">
                           <div class="table-responsive pt-3 ">
                               <table class="table table-bordered">
                                   <thead>
                                   <tr>
                                       <th>id</th>
                                       <th>Name</th>
                                       <th>Type</th>
                                       <th>lang </th>
                                       <th>lat </th>
                                       <th>Status</th>
                                       <th style="..." colspan="2">Actions</th>
                                   </tr>
                                   </thead>
                                   <tbody>

                                   @foreach($location as $rs)
                                     <tr class="table-info">
                                       <td> {{ $rs->id }}</td>
                                       <td> {{ $rs->name }}</td>
                                       <td> {{ $rs->type }}</td>
                                       <td> {{ $rs->long_location }}</td>
                                       <td> {{ $rs->lat_location }}</td>
                                       <td> {{ $rs->status == true ?'True':'False' }}</td>

                                       <td><a href="{{ route('admin_location_edit',['location'=>$rs->id]) }}"><img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a></td>
                                       <td> <a href="{{ route('delete.location',['location' => $rs->id]) }}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></td>
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
