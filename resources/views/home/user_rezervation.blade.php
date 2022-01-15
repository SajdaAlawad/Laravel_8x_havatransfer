@extends('layouts.home')
@section('title','Rezervation')


@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Rezervation</li>
        </ul>
    </div>
</div>

<div class="content1">
    <div class="container_12">
        <div class="grid_12 prefix_1">
            <h3>Rezervation</h3>
        @include('home.message')
            <form id="bookingForm" action="{{route('user_rezervation_store')}}" method="post">
                @csrf
                <div class="fl1">
                    <div class="product_id">
                        <input name="product_id" placeHolder="Vehicle:" type="number" data-constraints='@NotEmpty @Required '>
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
                <div class="fl1">
                    <div class="from_location_id_id">
                        <input name="from_location_id_id" placeHolder="From Where:" type="text" data-constraints="@NotEmpty @Required @Email">
                    </div>
                </div>
                <div class="fl1">
                    <div class="tmInput">
                        <div class="to_location_id_id">
                            <input name="to_location_id_id" placeHolder="To Where:" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
                <strong>Rezervation Date</strong>
                <label class="rezervation_date">
                    <input type="text" name="rezervation_date" placeHolder='10/05/2022' data-constraints="@NotEmpty @Required @Date">
                </label>
                <div class="clear"></div>
                <strong>Rezervation Time</strong>
                <label class="rezervation_time">
                    <input type="text" name="rezervation_time" placeHolder='2:15' data-constraints="@NotEmpty @Required @Time">
                </label>
                <div class="clear"></div>
                <strong>Pickup Time</strong>
                <label class="pickup_time">
                    <input type="text" name="pickup_time" placeHolder='2:15' data-constraints="@NotEmpty @Required @Time">
                </label>
                <div class="clear"></div>
                <label class="total_price_id">
                    <input type="number" name="total_price_id" placeholder="Total:"
                           data-constraints="@Required @JustLetters"/>
                </label>
                <div class="clear"></div>
                <div class="note">
                    <textarea name="note" placeHolder="Note" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
                </div>
                <p>Status</p>
                <select name="status" class="form-control form-control-sm">
                    <option value="false">False</option>
                    <option value="true">True</option>
                </select>
                <div>
                    <div class="clear"></div>
                    <a href="#" class="btn" data-type="submit">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
