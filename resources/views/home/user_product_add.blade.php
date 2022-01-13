
@extends('layouts.home')
@section('description')Add Product @endsection
@section('headerjs')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('title', 'My Review')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">home</a>  </li>
                            <li class="breadcrumb-item"><a href="#">Add Product</a>  </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    @include('home.usermenu')
                </div>
                        <div class="card-body col-md-10">
                            <div class="col-12 grid-margin stretch-card">
                            <div class="table-responsive ">
                                <div class="card">
                                    <form role="forms" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label >Category</label>
                                            <select class="js-example-basic-single w-100" name="category_id" style="...">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">  {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label >Title</label>
                                            <input type="text" name="title" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label >Keyword</label>
                                            <input type="text" name="keyword" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label >Description</label>
                                            <input type="text" name="description" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label >Type Of Taxi</label>
                                            <input type="text" name="Ticket_type" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label >Where From</label>
                                            <input type="text" name="from" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >To Where</label>
                                            <input type="text" name="to" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >Base Price </label>
                                            <input type="number" name="price_ticket" value="0" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label >KM Price </label>
                                            <input type="number" name="price_km" value="0" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label > Capacity</label>
                                            <input type="number" name="aicraft_type_capacity" value="18" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >Detail</label>
                                            <textarea name="detail"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>

                                        </div>
                                        <div class="form-group">
                                            <label >Slug</label>
                                            <input type="text" name="slug" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label >Image</label>
                                            <input type="file" name="image" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="js-example-basic-single w-100" name="status">
                                                <option selected="selected">False</option>
                                                <option >True</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Add </button>

                                    </form>

                            </div>
                        </div>
                  </div>

         </div>
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

