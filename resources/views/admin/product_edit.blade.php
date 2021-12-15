@extends('layouts.admin')

@section('title', 'Add Product ')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
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
                    </div>Ticket
                </div>
            </div>
        </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">

                            <form class="forms-sample" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Parent</label>
                                    <select class="js-example-basic-single w-100" name="category_id">

                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>{{$rs->title}}</option>
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
                                    <label >Type Of Taxi</label>
                                    <input type="text" name="Ticket_type" value="{{$data->Ticket_type}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Where From</label>
                                    <input type="text" name="from" value="{{$data->from}}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >To Where</label>
                                    <input type="text" name="to" value="{{$data->to}}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Base Price </label>
                                    <input type="number" name="price_ticket" value="{{$data->price_ticket}}" class="form-control" >
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
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>

                                </div>

                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" name="image" value="{{$data->image}}" class="form-control" >

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
                                <button type="submit" class="btn btn-primary mr-2">Update Ticket</button>

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
