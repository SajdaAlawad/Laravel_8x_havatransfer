@extends('layouts.admin')

@section('title', 'Product List')

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
                       <li class="breadcrumb-item"><a href="#">Taxi</a>  </li>
                   </ol>
               </div>
           </div>
        </div>
       </section>

       <section class="content">
           <div class="card">
               <div class="card-header">
                  <!-- <a href="" type="button" class="btn btn-block btn-info" style="width: 200px">Add Category</a> -->
                   <a href="{{route('admin_product_add')}}" type="button" class="btn btn-inverse-info btn-fw" style="width:200px">Add Taxi</a>
               </div>
               <div class="col-lg-10 stretch-card">
                   <div class="card">
                       <div class="card-body">
                           <div class="table-responsive ">
                               <table class="table table-bordered table-striped ">
                                   <thead>
                                   <tr>
                                       <th>id</th>
                                       <th>Category</th>
                                       <th>Title </th>
                                       <th>Type Of Taxi </th>
                                       <th>Where From</th>
                                       <th>To Where</th>
                                       <th>Base Price </th>
                                       <th>Km Price </th>
                                       <th>Capacity</th>
                                       <th>Image</th>
                                       <th>Image Gallery</th>
                                       <th>Status</th>
                                       <th style="..." colspan="2">Actions</th>
                                   </tr>
                                   </thead>
                                   <tbody>

                                   @foreach($datalist as $rs)
                                     <tr class="table-info">
                                       <td> {{ $rs->id }}</td>
                                       <td>
                                           {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                                       </td>
                                       <td> {{ $rs->title }}</td>
                                       <td>{{ $rs->Ticket_type }} </td>
                                       <td> {{ $rs->from }}</td>
                                       <td> {{ $rs->to }}</td>
                                       <td>{{$rs->price_ticket}}</td>
                                       <td>{{$rs->price_km}}</td>
                                       <td>{{$rs->aicraft_type_capacity}}</td>
                                       <td>
                                           @if ($rs->image)
                                               <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30" alt="">
                                            @endif
                                       </td>
                                       <td>
                                           <a href="{{route('admin_image_add',['product_id' =>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                               <img src="{{asset('assets/admin/image')}}/gallery.png" height="25"></a>
                                       </td>

                                       <td> {{ $rs->status }}</td>

                                       <td><a href="{{route('admin_product_edit',['id' =>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.jfif" height="25"></a></td>
                                       <td> <a href="{{route('admin_product_delete',['id' =>$rs->id])}}" onclick="return confirm('Delete! are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></td>
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
