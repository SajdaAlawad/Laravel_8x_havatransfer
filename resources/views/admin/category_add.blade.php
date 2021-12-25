@extends('layouts.admin')

@section('title', 'Add Category ')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Add Category</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">home</a>  </li>
                            <li class="breadcrumb-item"><a href="#">Add category</a>  </li>
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

                            <form class="forms-sample" action="{{route('admin_category_create')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Parent Category</label>
                                    <select class="js-example-basic-single w-100" name="parent_id" style="...">
                                        <option value="0" selected="selected">Ana Category</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{ \Add\Http\Controllers\admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >title</label>
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
                                    <label >Slug</label>
                                    <input type="text" name="title" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="js-example-basic-single w-100" name="status">
                                        <option selected="selected">False</option>
                                        <option >True</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Add Category</button>

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
