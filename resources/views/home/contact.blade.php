@extends('layouts.home')

@section('title', 'Contact -' . $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> / <a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="content1">
        <div class="container_12">
            <div class="grid_5">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="success-message">Contact Information</h3>
                        {!! $setting->contact !!}
                    </div>

                </div>
            </div>
            <div class="grid_6 prefix_1">
                <h3>GET IN TOUCH</h3>
                @include('home.message')
                <form id="form" action="{{route('sendmessage')}}" method="post">
                    @csrf
                    <div class="success_wrapper">
                        <div class="success-message">Contact form submitted</div>
                    </div>
                    <label class="name">
                        <input type="text" name="name" placeholder="Name:" data-constraints="@Required @JustLetters" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                    </label>
                    <label class="email">
                        <input type="text" name="email" placeholder="Email:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="phone">
                        <input type="text" name="phone" placeholder="Phone:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="country">
                        <input type="text" name="city" placeholder="City:" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    <label class="subject">
                        <input type="text" name="subject" placeholder="Subject:" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    <label class="message">
                        <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>
                    <div>
                        <div class="clear"></div>
                        <div class="btns">
                            <input class="btn" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
