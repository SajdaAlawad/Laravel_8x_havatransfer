@extends('layouts.admin')

@section('title', 'Edit Product ')

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
                        <h3>Edit </h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">home</a>  </li>
                            <li class="breadcrumb-item"><a href="#">Edit </a>  </li>
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

                            <form class="forms-sample" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Category</label>
                                    <select class="js-example-basic-single w-100" name="category_id" style="...">

                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>
                                                {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" name="title"  value="{{$data->title}}"  class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Keyword</label>
                                    <input type="text" name="keyword" value="{{$data->keyword}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                </div>



                                <div class="form-group">
                                    <label >Type Of Vehicle</label>
                                    <input type="text" name="Ticket_type" value="{{$data->Ticket_type}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >KM Price </label>
                                    <input type="number" name="price_km" value="{{$data->price_km}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label > Capacity</label>
                                    <input type="number" name="aicraft_type_capacity" value="{{$data->aicraft_type_capacity}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail' );
                                    </script>

                                </div>

                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" name="image" class="form-control" >

                                    @if ($data->image)
                                        <img src="{{ Storage::url($data->image) }}" height="60" alt="">
                                     @endif
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="js-example-basic-single w-100" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
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
