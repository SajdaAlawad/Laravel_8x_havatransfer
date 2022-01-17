@extends('layouts.home')

@section('title', 'Reservation -' . $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> / <a href="#">Reservation</a></li>
            </ul>
        </div>
    </div>
    <div class="content1">
        <div class="container_12">
            <div class="grid_12 prefix_1">
                <h3>Reservation</h3>
                @include('home.message')
                <form id="form" action="{{route('user_location_store')}}" method="post">
                    @csrf
                    <div class="success_wrapper">
                        <div class="success-message">Location has been Selected</div>
                    </div>
                    <label for="type"> From:
                        <select name="from" class="form-control form-control-sm">
                            @foreach($datalist1 as $ds1)
                                <option value="{{$ds1->id}}">{{$ds1->name}}</option>
                            @endforeach
                        </select>
                    </label>
                    <label for="type"> To:
                    <select name="to" class="form-control form-control-sm">
                        @foreach($datalist2 as $ds2)
                        <option value="{{$ds2->id}}">{{$ds2->name}}</option>
                        @endforeach
                    </select>
                    </label>
                        <div class="fl1">
                            <div class="product_id">
                                <input name="product_id" placeHolder="Vehicle:" type="number" value="{{ $vichle->name }}" data-constraints='@NotEmpty @Required '>
                            </div>
                            <div class="phone ">
                                <input name="phone" placeHolder="Phone:" type="number" value="{{Auth::user()->phone}}" data-constraints="@NotEmpty @Required">
                            </div>
                        </div>

                        <div class="fl1">
                            <div class="name">
                                <input name="name" placeHolder="Name Surename:" type="text" value="{{Auth::user()->name}}" data-constraints="@NotEmpty @Required @Email">
                            </div>
                            <div class="email">
                                <input name="email" placeHolder="Email:" type="text" value="{{Auth::user()->email}}" data-constraints="@NotEmpty @Required">
                            </div>
                        </div>
                        <div class="tmInput">
                            <divl class="rezervation_no">
                                <input type="number" name="rezervation_no" placeholder="Rezervation Number:" data-constraints="@NotEmpty @Required "/>
                            </divl>
                        </div>
                        <div class="tmInput">
                            <divl class="airline">
                                <input type="text" name="airline" placeholder="Airline:" data-constraints="@NotEmpty @Required "/>
                            </divl>
                        </div>
                    <div class="clear"></div>
                    <strong>Reservation Date</strong>
                    <label class="rezervation_date">
                        <input type="datetime-local" name="Check-in" placeHolder='10/05/2022' data-constraints="@NotEmpty @Required @Date">
                    </label>

                    <div class="clear"></div>
                    <strong>Reservation Time</strong>
                    <label class="rezervation_time">
                        <input type="time" name="rezervation_time" min="01:00" max="23:00" step="900">
                    </label>

                    <div class="clear"> </div>
                    <strong>Pickup Time</strong>
                    <label class="pickup_time">
                        <input type="time" name="pickup_time" min="01:00" max="23:00" step="900">
                    </label>
                    <label class="total_price">
                        <input type="number" name="total_price" placeholder="Total:"
                               data-constraints="@Required @JustLetters"/>
                    </label>
                    <div class="clear"></div>
                    <div class="note">
                        <textarea name="note" placeHolder="Note" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
                    </div>

{{--                    <label class="time">--}}
{{--                        <input type="time" name="pickup_time" min="01:00" max="23:00" step="900">--}}
{{--                    </label>--}}
                        <div class="clear"></div>
                        <div class="btns">
                            <input class="btn" type="submit"/>
                        </div>
                </form>
            </div>
        </div>
    </div>

@endsection

