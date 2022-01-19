@extends('layouts.admin')

@section('title', 'Add location ')
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
                        <h3>Add </h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">home</a>  </li>
                            <li class="breadcrumb-item"><a href="{{route('admin_location_create')}}">Add </a>  </li>
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

                            <form role="forms" action="{{route('admin_location_store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" name="name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="js-example-basic-single w-100" name="type">
                                        <option value="airport" selected="selected">Airport</option>
                                        <option value="city">City</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label >long location</label>
                                    <input type="number" name="long_location" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Lat location</label>
                                    <input type="number" name="lat_location" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="js-example-basic-single w-100" name="status">
                                        <option value="0" selected="selected">False</option>
                                        <option value="1">True</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Add </button>
                            </form>

                    </div>
                </div>
            </div>

            <div class="card-footer">
               ....
            </div>
        </div>
    </section>
   </div>
@endsection
