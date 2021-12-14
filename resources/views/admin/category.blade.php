@extends('layouts.admin')

@section('title', 'Category List')

@section('content')

   <div class="content-wrapper">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
               <div class="col-sm-6">
                   <h3>UÇUŞLAR</h3>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="#">home</a>  </li>
                       <li class="breadcrumb-item"><a href="#">UÇUŞ</a>  </li>
                   </ol>
               </div>
           </div>
        </div>
       </section>

       <section class="content">
           <div class="card">
               <div class="card-header">
                   <h3 class="card-header">Flights List</h3>
               </div>


               <div class="col-lg-12 stretch-card">
                   <div class="card">
                       <div class="card-body">

                           <div class="table-responsive pt-3">
                               <table class="table table-bordered">
                                   <thead>
                                   <tr>
                                       <th>id</th>
                                       <th>Parent  </th>
                                       <th>Title </th>
                                       <th>Status </th>
                                       <th>Edit </th>
                                       <th>Delete</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($datalist as $rs)
                                   <tr class="table-info">
                                       <td> {{ $rs->id }}</td>
                                       <td>{{ $rs->parent_id }} </td>
                                       <td> {{ $rs->title }}</td>
                                       <td> {{ $rs->status }}</td>
                                       <td> Edit</td>
                                       <td> Delete</td>
                                   </tr>
                                   @endforeach
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>




               <div class="card-footer">
                   footer
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
