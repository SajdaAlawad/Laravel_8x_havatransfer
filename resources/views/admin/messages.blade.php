@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('content')

   <div class="content-wrapper">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
               <div class="col-sm-6">
                   <h3>Messages</h3>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="#">home</a>  </li>
                       <li class="breadcrumb-item"><a href="#">Messages</a>  </li>
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
                                       <th>Email </th>
                                       <th>Phone</th>
                                       <th>Subject</th>
                                       <th>Message</th>
                                       <th>Admin Note</th>
                                       <th style="..." colspan="3">Actions</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($datalist as $rs)
                                     <tr class="table-info">
                                       <td> {{ $rs->id }}</td>
                                       <td> {{ $rs->name }}</td>
                                       <td>{{ $rs->email }} </td>
                                       <td> {{ $rs->phone }}</td>
                                        <td> {{ $rs->subject }}</td>
                                         <td> {{ $rs->message }}</td>
                                         <td> {{ $rs->note }}</td>
                                         <td> {{ $rs->status }}</td>
                                       <td>
                                           <a href="{{route('admin_message_edit',['id' =>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                               <img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a>
                                       </td>
                                       <td><a href="{{route('admin_message_delete',['id' =>$rs->id])}}" onclick="return confirm('Are You Sure To Delete it?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a>
                                       </td>
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
