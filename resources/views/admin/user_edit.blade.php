@extends('layouts.admin')

@section('title', 'Edit User ')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit User  </h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">home</a>  </li>
                            <li class="breadcrumb-item"><a href="{{route('admin_user_edit')}}">Edit User  </a>  </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">

                            <form class="forms-sample" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" name="name"  value="{{$data->name}}"  class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" name="phone" value="{{$data->phone}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" name="image" class="form-control" >

                                    @if ($data->profile_photo_path)
                                        <img src="{{ Storage::url($data->profile_photo_path) }}"  height="60" style="border-radius: 10px" alt="">
                                     @endif
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update </button>

                            </form>

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
