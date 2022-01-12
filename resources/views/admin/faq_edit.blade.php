@extends('layouts.admin')

@section('title', 'Add Product ')

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

                            <form class="forms-sample" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Position</label>
                                    <input type="number" id="position" name="position" value="{{$data->position}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" id="title" name="question" value="{{$data->question}}" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea name="answer">{{$data->answer}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>
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
