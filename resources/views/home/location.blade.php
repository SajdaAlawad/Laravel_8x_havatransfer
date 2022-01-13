@extends('layouts.home')

@section('title', 'Location -' . $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> / <a href="#">Location</a></li>
            </ul>
        </div>
    </div>
    <div class="content1">
        <div class="container_12">
            <div class="grid_12 prefix_1">
                <h3>Location</h3>
                @include('home.message')
                <form id="form" action="{{route('location')}}" method="post">
                    @csrf
                    <div class="success_wrapper">
                        <div class="success-message">Location has been Selected</div>
                    </div>
                    <label class="product_id">
                        <input type="text" name="product" placeholder="Vehicle:" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                    </label>
                    <label class="airport">
                        <input type="text" name="airport" placeholder="Airport:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="city">
                        <input type="text" name="city" placeholder="City:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="from_location">
                        <input type="text" name="from_location" placeholder="From Where:" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    <label class="to_location">
                        <input type="text" name="to_location" placeholder="To Where:" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    <label class="lat_location">
                        <input type="number" name="lat" placeholder="Lat:" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>
                    <label class="long_location">
                        <input type="number" name="long" placeholder="Long:" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>
                    <p>Status</p>
                    <select class="form-control form-control-sm">
                        <option>False</option>
                        <option>True</option>
                    </select>
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

