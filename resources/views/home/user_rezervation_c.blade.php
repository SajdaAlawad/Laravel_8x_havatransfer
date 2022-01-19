@extends('layouts.home')
@section('title','Rezervation')


@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home </a>/<a href="{{route('user_rezervations')}}">Reservation </a></li>
        </ul>
    </div>
</div>

<div class="content1">
    <div class="container_12">
        <div class="grid_12 prefix_1">
            <h3>Reservation</h3>
        @include('home.message')
            <form id="bookingForm" action="{{route('user_rezervation_store')}}" method="post">
                @csrf
                <div class="fl1">
                    <div class="name">
                        <input name="name" placeHolder="Name Surename:" type="text" value="{{Auth::user()->name}}" data-constraints="@NotEmpty @Required @Email">
                    </div>
                </div>
                <div class="fl1">
                    <div class="phone ">
                        <input name="phone" placeHolder="Phone:" type="number" value="{{Auth::user()->phone}}" data-constraints="@NotEmpty @Required">
                    </div>
                </div>
                <div class="fl1">
                <div class="email">
                    <input name="email" placeHolder="Email:" type="text" value="{{Auth::user()->email}}" data-constraints="@NotEmpty @Required">
                </div>
                </div>
                <div class="fl2">
                    <div class="airline">
                        <input type="text" name="airline" placeholder="Airline:" data-constraints="@NotEmpty @Required "/>
                    </div>
                </div>
                <div class="fl3">
                    <div class="rezervation_no">
                        <input type="number" name="rezervation_no" placeholder="Rezervation Number:" data-constraints="@NotEmpty @Required "/>
                    </div>
                </div>

                <div class="clear">

                </div>
                <div class="fl3">
                    <div class="from_location_id_id">
                        <div for="from_location_id_id">
                            <select id="from" name="from_location_id_id" class="form-control form-control-sm">
                                @foreach($fromlist as $ds1)
                                    <option value="{{$ds1->id}}"  data-long="{{$ds1->long_location}}" data-lat="{{$ds1->lat_location}}">{{$ds1->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <a @if($fromlist->first()->type == 'airport')
                             href="{{route('fromto_c',['id'=>$car_id])}}"
                             @else
                             href="{{route('user_rezervation_add_c',['id'=>$car_id])}}"
                             @endif
                            class="link1">  Change Directions <i class="bi bi-arrow-left-right"></i></a>
                    <div class="tmInput">
                        <div class="to_location_id_id">
                            <select id="to" name="to_location_id_id" class="form-control form-control-sm">
                                @foreach($tolist as $ds2)
                                    <option value="{{$ds2->id}}"  data-long="{{$ds2->long_location}}" data-lat="{{$ds2->lat_location}}" >{{$ds2->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </a>
                </div>
                    <div class="fl3">
                        <label for="product_id">
                            <select  name="product_id" id="car" class="form-control form-control-sm">
                                <option selected value="0"  data-price="0" disabled>Select Ride</option>
                                @foreach($cars as $car)
                                    <option @if($car->id==$car_id) selected @endif value="{{$car->id}}" data-price="{{$car->price_km}}">{{$car->title}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                <div class="clear"></div>
                <strong>Reservation Date</strong>
                <label class="rezervation_date">
                    <input type="datetime-local" class="rezervation_date" name="rezervation_date" placeHolder='10/05/2022' data-constraints="@NotEmpty @Required @Date">
                </label>
                <div class="clear"> </div>
                <strong>Pickup Time</strong>
                <label class="pickup_time">
                    <input type="time" name="pickup_time" min="01:00" max="23:00" step="900">
                </label>
                <div class="clear"></div>
                <label class="total_price">
                    Total: <span id="total_id"></span>
                </label>
                <div class="clear"></div>
                <div class="note">
                    <textarea name="note" placeHolder="Note" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
                </div>
                <div>
                    <div class="clear"></div>
                    <input type="submit" class="btn" value="Submit">
                </div>
                <script>
                    var total_id = document.getElementById("total_id");
                        var selected =  document.getElementById("from")[document.getElementById("from").selectedIndex];
                        var selectedCar = document.getElementById("car")[document.getElementById("car").selectedIndex];
                        var selectedto = document.getElementById("to")[document.getElementById("to").selectedIndex];
                        var long1 = (selected.dataset.long);
                        var long2 = (selectedto.dataset.long);
                        var lat1 = (selected.dataset.lat);
                        var lat2 = (selectedto.dataset.lat);
                        var distance = Math.sqrt(((long1-long2)*(long1-long2))+((lat1-lat2)*(lat1-lat2)));
                        var txt = (distance)*(selectedCar.dataset.price);
                        total_id.innerText = txt.toFixed(2);

                    document.getElementById("from").addEventListener('change', function() {
                        var selected = this.options[this.selectedIndex];
                        var selectedCar = document.getElementById("car")[document.getElementById("car").selectedIndex];
                        var selectedto = document.getElementById("to")[document.getElementById("to").selectedIndex];
                        //var txt = selectedCar.dataset.price;
                        var long1 = (selected.dataset.long);
                        var long2 = (selectedto.dataset.long);
                        var lat1 = (selected.dataset.lat);
                        var lat2 = (selectedto.dataset.lat);
                        var distance = Math.sqrt(((long1-long2)*(long1-long2))+((lat1-lat2)*(lat1-lat2)));
                        var txt = (distance)*(selectedCar.dataset.price);
                        total_id.innerText = txt.toFixed(2);
                    });
                    document.getElementById("to").addEventListener('change', function() {
                        var selectedto = this.options[this.selectedIndex];
                        var selectedCar = document.getElementById("car")[document.getElementById("car").selectedIndex];
                        var selected = document.getElementById("from")[document.getElementById("from").selectedIndex];
                        //var txt = selectedCar.dataset.price;
                        var long1 = (selected.dataset.long);
                        var long2 = (selectedto.dataset.long);
                        var lat1 = (selected.dataset.lat);
                        var lat2 = (selectedto.dataset.lat);
                        var distance = Math.sqrt(((long1-long2)*(long1-long2))+((lat1-lat2)*(lat1-lat2)));
                        var txt = (distance)*(selectedCar.dataset.price);
                        total_id.innerText = txt.toFixed(2);
                    });
                    document.getElementById("car").addEventListener('change', function() {
                        var selectedCar = this.options[this.selectedIndex];
                        var selected = document.getElementById("from")[document.getElementById("from").selectedIndex];
                        var selectedto = document.getElementById("to")[document.getElementById("to").selectedIndex];
                        //var txt = selectedCar.dataset.price;
                        var long1 = (selected.dataset.long);
                        var long2 = (selectedto.dataset.long);
                        var lat1 = (selected.dataset.lat);
                        var lat2 = (selectedto.dataset.lat);
                        var distance = Math.sqrt(((long1-long2)*(long1-long2))+((lat1-lat2)*(lat1-lat2)));
                        var txt = (distance)*(selectedCar.dataset.price);
                        total_id.innerText = txt.toFixed(2);
                    });
                </script>

            </form>
        </div>
    </div>
</div>

@endsection
