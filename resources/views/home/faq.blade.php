@extends('layouts.home')
@section('title','Frequently Asked Question List')

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection

@section('content')

    <div class="content1">
        <div class="container_12">
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a> / <a href="{{route('faq')}}">Frequently Asked Question List</a></li>
        </ul>
    </div>
</div>
<br><br>

<div class="section">
    <div class="container">
        <div class="row">
            <div id="accordion">
              @foreach($datalist as $rs)
                <h3>{{$rs->question}}</h3>
                <div>
                <p>  {!! $rs->answer !!} </p>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
        </div>
    </div>

@endsection
