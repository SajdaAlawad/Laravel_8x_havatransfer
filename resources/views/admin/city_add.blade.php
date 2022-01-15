@extends('layouts.admin')

@section('title', 'Add City ')
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
                            <li class="breadcrumb-item"><a href="#">home</a>  </li>
                            <li class="breadcrumb-item"><a href="#">Add </a>  </li>
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

                            <form role="forms" action="{{route('admin_city_store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" name="name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Lang</label>
                                    <input type="number" name="lang" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Lat</label>
                                    <input type="number" name="lat" class="form-control" >
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
