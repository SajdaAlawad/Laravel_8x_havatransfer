@extends('layouts.admin')

@section('title', 'Frequently Asked Question List')

@section('content')

   <div class="content-wrapper">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
               <div class="col-sm-6">
                   <h3>Frequently Asked Question List</h3>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="#">home</a>  </li>
                       <li class="breadcrumb-item"><a href="#">Frequently Asked Question List</a>  </li>
                   </ol>
               </div>
           </div>
        </div>
       </section>

       <section class="content">
           <div class="card">
               <div class="card-header">
                  <!-- <a href="" type="button" class="btn btn-block btn-info" style="width: 200px">Add Category</a> -->
                   <a href="{{route('admin_faq_add')}}" type="button" class="btn btn-inverse-info btn-fw" style="width:200px">Add Faq</a>
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
                                       <th>Position</th>
                                       <th>Question </th>
                                       <th>Answer</th>
                                       <th>Status</th>
                                       <th style="..." colspan="2">Actions</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($datalist as $rs)
                                     <tr class="table-info">
                                       <td> {{ $rs->position }}</td>
                                       <td> {{ $rs->question }}</td>
                                       <td>{!! $rs->answer !!} </td>
                                       <td> {{ $rs->status }}</td>
                                       <td><a href="{{route('admin_faq_edit',['id' =>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a></td>
                                       <td> <a href="{{route('admin_faq_delete',['id' =>$rs->id])}}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></td>
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
    <script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
    <script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
    <script src="{{asset('assets')}}/admin/js/template.js"></script>
    <script src="{{asset('assets')}}/admin/js/settings.js"></script>
    <script src="{{asset('assets')}}/admin/js/todolist.js"></script>
    <!-- endinject -->
@endsection
