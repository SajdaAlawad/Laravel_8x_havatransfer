@extends('layouts.admin')

@section('title', 'Add Faq ')
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
                        <h3>Add Faq</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">home</a>  </li>
                            <li class="breadcrumb-item"><a href="{{route('admin_faq_add')}}">Add Faq </a>  </li>
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

                            <form role="forms" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Position</label>
                                    <input type="number" id="position" name="position" value="0" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" id="title" name="question" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea name="answer"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>
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

            <div class="card-footer">
               ....
            </div>
        </div>
    </section>
   </div>
@endsection
