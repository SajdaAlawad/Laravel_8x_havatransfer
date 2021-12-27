@extends('layouts.home')

@section('title', 'Contact -' . $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="container_12">
            <div class="grid_5">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="success-message">Contact Information</h3>
                        {!! $setting->contact !!}
                    </div>
                   <div class="col-md-5">
                       <h3 class="section-title"> Form Contactt</h3>
                       <div class="grid_6 prefix_1">
                           @include('home.message')
                           <form id="checkout-form" class="clearfix" action="{{route('sendmessage')}}" method="post">
                               @csrf
                               <label class="name">
                                   <input class="input" type="text" name="name" placeholder="Name & Surename">
                               </label>
                               <label class="phone">
                                   <input class="input" type="text" name="phone" placeholder="Phone Number">
                               </label>
                               <label class="email">
                                   <input class="email" type="text" name="email" placeholder="email">
                               </label>
                               <label class="subject">
                                   <input class="input" type="text" name="subject" placeholder="subject">
                               </label>
                               <label class="subject">
                                   <input class="input" type="text" name="city" placeholder="city">
                               </label>
                               <label class="message">
                                   <textarea class="input" name="message" rows="6" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                   <span class="empty-message">*This field is required.</span>
                                   <span class="error-message">*The message is too short.</span>
                               </label>
                               <div>
                                   <div class="clear"></div>
                                   <div class="btns">
                                       <a href="#" data-type="submit" class="btn">Submit</a>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection
