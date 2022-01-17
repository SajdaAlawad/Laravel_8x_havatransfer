@extends('layouts.admin')

@section('title', 'Users List')

@section('content')

   <div class="content-wrapper">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
               <div class="col-sm-6">
                   <h3>Users</h3>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="#">home</a>  </li>
                       <li class="breadcrumb-item"><a href="#">Users</a>  </li>
                   </ol>
               </div>
           </div>
        </div>
       </section>

       <section class="content">
           <div class="card">
               <div class="col-lg-10 stretch-card">
                   <div class="card">
                       <div class="card-body">
                           <div class="table-responsive ">
                               <table class="table table-bordered table-striped ">
                                   <thead>
                                   <tr>
                                       <th>id</th>
                                       <th></th>
                                       <th>Name </th>
                                       <th>Email </th>
                                       <th>Phone</th>
                                       <th>Address</th>
                                       <th>Roles</th>
                                       <th style="..." colspan="2">Actions</th>
                                   </tr>
                                   </thead>
                                   <tbody>

                                   @foreach($datalist as $rs)
                                     <tr class="table-info">
                                       <td> {{ $rs->id }}</td>
                                       <td>
                                           @if($rs->profile_photo_path)
                                               <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                            @endif
                                       </td>
                                       <td> {{ $rs->name }}</td>
                                       <td>{{ $rs->email }} </td>
                                       <td> {{ $rs->phone }}</td>
                                       <td> {{ $rs->address }}</td>
                                         <td>
                                             @foreach($rs->roles as $row)
                                                 {{$row->name}},
                                             @endforeach
                                             <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=100 left=300 width=800, height=600')">
                                                 <i class="nav-icon fas fa-plus-circle"></i>
                                             </a>
                                         </td>
                                       <td><a href="{{route('admin_user_edit',['id' =>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a></td>
                                       <td> <a href="{{route('admin_user_delete',['id' =>$rs->id])}}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></td>
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
