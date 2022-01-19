@extends('layouts.home')
@section('title', $data->title)
@section('description'){{$data->description}} @endsection
@section('keywords',$data->keywords)
@section('css')
    <style>
        .content1 {
            padding-bottom: 0px;
        }
        .starlabel {

            display: contents;
        }
        .a{
            color: #212529;
        }

</style>
@endsection
@section('content')
    <div class="content1">
        <div class="container_12">
            <ul class="container">
                <li><a href="{{route('home')}}">Home</a> /{{ \App\Http\Controllers\admin\CategoryController::getParentsTree($data->category, $data->category->title) }} / {{$data->title}}</li>
            </ul>
        </div>
    </div>

    <div class="section">
                <div id="categg" class="content1">
                    <div class="container_12">
                    <div class="container">
                        <div class="grid_6">
                            <h3>Product Details</h3>
                            <div class="block2">
                                <img src="{{ Storage::url($data->image)}}" style="height:400px" alt="" class="img_inner fleft">
                            </div>
                            <div class="row">
                                @foreach($datalist as $rs)
                                    <div class="single-reviews">
                                        <img src="{{ Storage::url($rs->image)}}" style="width:130px;height:100px;" >
                                    </div>
                                @endforeach
                            </div>
                            <div class="product-reviews">
                                @php
                                $countreview=\App\Http\controllers\HomeController::countreview($data->id);
                                @endphp
                                <a>Reviews ({{$countreview}})</a>

                                @foreach($reviews as $rs)
                                    <div class="single-reviews">
                                        <div class="review-heading">
                                            <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}}</a></div>
                                            <div class="a"><a  href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}}</a></div>
                                            <div class="review-rating pull-right">
                                                <i class=" @if($rs->rate<1) fa fa-star-o  @else fa fa-star @endif"></i>
                                                <i class=" @if($rs->rate<2)  fa fa-star-o  @else fa fa-star @endif"></i>
                                                <i class=" @if($rs->rate<4) fa fa-star-o @else fa fa-star @endif"></i>
                                                <i class=" @if($rs->rate<5) fa fa-star-o @else fa fa-star @endif"></i>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <strong>{{$rs->subject}}</strong>
                                            <p>{{$rs->review}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="grid_4">
                                <div class="extra_wrapper" >
                                    <div class="text1 col1">
                                        <a href="#">{{$data->title}}</a>
                                        <p> Single KM price : {{ $data->price_km }}</p>
                                    </div>
                                    <div>
                                       @php
                                       $avgrev =\App\Http\controllers\HomeController::avrgreview($data->id);
                                        @endphp
                                        <div class="product-chart-wrapper">
                                            <i class=" @if($avgrev<1) fa fa-star-o @else fa fa-star @endif"></i>
                                            <i class=" @if($avgrev<2) fa fa-star-o @else fa fa-star @endif"></i>
                                            <i class=" @if($avgrev<3) fa fa-star-o @else fa fa-star @endif"></i>
                                            <i class=" @if($avgrev<4) fa fa-star-o @else fa fa-star @endif"></i>
                                            <i class=" @if($avgrev<5) fa fa-star-o @else fa fa-star @endif"></i>
                                        </div>
                                        <a href="#tab2">{{$countreview}} Review(s) {{$avgrev}} /Add Review</a>
                                    </div>
                                    <li class="active"><a data-toggle="tab" href="#">Details</a></li>
                                    <p>
                                        {!! $data->detail !!}
                                    </p>
                                    <li class="active"><a data-toggle="tab" href="#">Description</a></li>
                                    <p>
                                        {!! $data->description !!}
                                    </p>
{{--                                    reviews yaninda sayilari gostermek icin--}}

                                <a id="res.label" href="{{route('fromto_c',['id'=>$data->id])}}" class="link1">Reserve</a>
                                <p></p>
                                @livewireScripts

                                <h6 >Write Your Review</h6>
                                @livewire('review',['id' => $data->id])

                            </div>
                        </div>

                    </div>


{{--                            bu dongu commentlar asagida gostermek icin--}}
{{--                          <div id="tab2" class="tab-pane fade in">--}}
{{--                                <div class="row">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                             <div class="block2">--}}
{{--                               <img src="{{ Storage::url($data->image)}}" style="height:100px " alt="">--}}
{{--                                   <div class="extra_wrapper">--}}
{{--                                     <div class="text1 col1"><a href="#">{{$data->title}}</a></div>--}}
{{--                                       <p>{{$data->description}} </p>--}}
{{--                                           <div class="price"><span>{{$data->price_ticket}}</span></div>--}}
{{--                                             <br>--}}
{{--                                             <a href="{{route('addtocart',['id'=>$data->id])}}" class="link1">Reserve</a>--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                                @foreach($datalist as $rs)--}}
{{--                                <div class="block2">--}}
{{--                                    <img src="{{ Storage::url($rs->image)}}" style="height:100px " alt="">--}}
{{--                                    <div class="extra_wrapper">--}}
{{--                                        <div class="text1 col1">--}}
{{--                                          <a href="#">{{$rs->title}}</a></div>--}}
{{--                                        <p>{{$data->description}} </p>--}}
{{--                                        <div class="price"><span>{{$rs->price_ticket}}</span></div>--}}
{{--                                        <br>--}}
{{--                                        <a href="{{route('addtocart',['id'=>$rs->id])}}" class="link1">Reserve</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
                        </div>


                    </div>
{{--                  <div class="grid_3 prefix_1">--}}
{{--                        <ul class="list">--}}
{{--                            <li class="active"><a data-toggle="tab" href="#">Description</a></li>--}}
{{--                            <li class="active"><a data-toggle="tab" href="#">Details</a></li>--}}
{{--                            <li class="active"><a data-toggle="tab" href="#">Reviews</a></li>--}}
{{--                        </ul>--}}
{{--                        <div class="tab-content">--}}
{{--                            <div id="tab1" class="tab-pane fade in active">--}}
{{--                                <p>--}}
{{--                                    {!! $data->detail !!}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection



