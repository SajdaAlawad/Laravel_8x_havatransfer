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
            <h3>Location</h3>
{{--            @include('home.message')--}}
            <form id="bookingForm" action="{{route('user_rezervation_store')}}" method="post">
                @csrf
                <div class="fl1">
                    <div class="user_id">
                        <input name="user_id" placeHolder="User:" type="number" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                    </div>
                    <div class="product">
                        <input name="product_id" placeHolder="Product:" type="number" data-constraints="@NotEmpty @Required">
                    </div>
                </div>
                <label class="name">
                    <input type="text" value="{{Auth::user()->name}}" name="name" placeholder="Name SureName"
                           data-constraints="@Required @JustLetters"/>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid phone.</span>
                </label>
                <label class="email">
                    <input type="text" name="email" value="{{Auth::user()->email}}" placeholder="Email:"
                           data-constraints="@Required @JustLetters"/>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid phone.</span>
                </label>
                <label class="phone">
                    <input type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="Phone:"
                           data-constraints="@Required @JustLetters"/>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid phone.</span>
                </label>
                <div class="fl1">
                    <div class="from_location_id_id">
                        <input name="from_location_id_id"  placeHolder="From Where:" type="number" data-constraints="@NotEmpty @Required @Email">
                    </div>
                    <div class="to_location_id_id">
                        <input name="to_location_id_id"  placeHolder="To Where:" type="number" data-constraints="@NotEmpty @Required">
                    </div>
                </div>
                <label class="airline">
                    <input type="text" name="airline" placeholder="Airline:" data-constraints="@Required @Email" />
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid email.</span>
                </label>
                <div class="clear"></div>
                <strong>Rezervation Number</strong>
                <label class="rezervation_no">
                    <input type="text" name="rezervation_no" placeHolder='46392' data-constraints="@NotEmpty @Required @Date">
                </label>
                <strong>Rezervation Date</strong>
                <label class="rezervation_date">
                    <input type="text" name="rezervation_date" placeHolder='10/05/2022' data-constraints="@NotEmpty @Required @Date">
                </label>
                <div class="clear"></div>
                <strong>Rezervation Time</strong>
                <label class="rezervation_time">
                <input class="input" type="text"  name="rezervation_time" placeHolder='2:15' data-constraints="@NotEmpty @Required @Date">Rezervation Time</input>
                </label>
                <strong>Pickup Time</strong>
                <label class="pickup_time">
                    <input type="text" name="pickup_time" placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
                </label>
                <div class="clear"></div>
                <div class="fl1 fl2">
                    <em>hhhh</em>
                    <select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
                        <option>1</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <div class="clear"></div>
                    <em> no thing</em>
                    <select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
                        <option>1</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <label class="$total_price">
                    <input class="input" type="number"  name="$total_price" value="{{$total_price}}" placeHolder='2:15' data-constraints="@NotEmpty @Required @Date">Rezervation Time</input>
                </label>
                <div class="tmTextarea">
                    <textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
                </div>
                <p>Status</p>
                <select name="status" class="form-control form-control-sm">
                    <option value="false">False</option>
                    <option value="true">True</option>
                </select>
                <input type="hidden" name="price" >

                <form>
                    <div class="pull-right">
                    <label class="btn" data-type="submit">Reserve</label>
                    </div>
                </form>
            </form>
        </div>
    </div>
</div>

@endsection
