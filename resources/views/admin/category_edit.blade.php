<?php
use App\Http\Controllers\Admin\CategoryController
?>
@extends('layouts.admin')

@section('title', 'Edit Category ')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit Category</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">home</a>  </li>
                            <li class="breadcrumb-item"><a href="#">Edit category</a>  </li>
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

                            <form class="forms-sample" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Parent</label>

                                    <select class="js-example-basic-single w-100" name="parent_id" style="width: 100%">

                                        <option value="0" selected="selected" >Main Category</option>
                                        @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>
                                          {{ CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >title</label>
                                    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control"  >
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
                                    <label >Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}"  class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="js-example-basic-single w-100" name="status" style="...">
                                        <option selected="selected">{{$data->status}} </option>
                                        <option >False</option>
                                        <option >True</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update Category</button>

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
