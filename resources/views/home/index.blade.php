
@extends('layouts.home')

@section('title', $setting->title.' / Home')
@section('description'){{ $setting->description }} @endsection
@section('keywords', $setting->keywords)

@include('home._slider')
@section('content')

    <div class="container_12">
        @foreach($daily as $rs)
        <div class="grid_4">
            <div class="banner">
{{--              ahmed soracagim  <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"></a>--}}
                <img src="{{ Storage::url($rs->image)}}" style="height:300px " alt="">
                <div class="label">
                    <div class="title">{{$rs->title}}</div>
                    <div class="price">Price<span>{{$rs->price_km}}</span></div>
                    <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">Reserve</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="clear"></div>

{{--        <div class="grid_12 prefix_1">--}}
{{--            <h3>Booking Form</h3>--}}
{{--            <form id="bookingForm">--}}
{{--                <div class="fl1">--}}
{{--                    <div class="tmInput">--}}
{{--                        <input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>--}}
{{--                    </div>--}}
{{--                    <div class="tmInput">--}}
{{--                        <input name="Country" placeHolder="Country:" type="text" data-constraints="@NotEmpty @Required">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="fl1">--}}
{{--                    <div class="tmInput">--}}
{{--                        <input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">--}}
{{--                    </div>--}}
{{--                    <div class="tmInput mr0">--}}
{{--                        <input name="Hotel" placeHolder="Hotel:" type="text" data-constraints="@NotEmpty @Required">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clear"></div>--}}
{{--                <strong>Check-in</strong>--}}
{{--                <label class="tmDatepicker">--}}
{{--                    <input type="text" name="Check-in" placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date">--}}
{{--                </label>--}}
{{--                <div class="clear"></div>--}}
{{--                <strong>Check-out</strong>--}}
{{--                <label class="tmDatepicker">--}}
{{--                    <input type="text" name="Check-out" placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">--}}
{{--                </label>--}}
{{--                <div class="clear"></div>--}}
{{--                <div class="tmRadio">--}}
{{--                    <p>Comfort</p>--}}
{{--                    <input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>--}}
{{--                    <span>Cheap</span>--}}
{{--                    <input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />--}}
{{--                    <span>Standart</span>--}}
{{--                    <input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />--}}
{{--                    <span>Lux</span>--}}
{{--                </div>--}}
{{--                <div class="clear"></div>--}}
{{--                <div class="fl1 fl2">--}}
{{--                    <em>Adults</em>--}}
{{--                    <select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">--}}
{{--                        <option>1</option>--}}
{{--                        <option>1</option>--}}
{{--                        <option>2</option>--}}
{{--                        <option>3</option>--}}
{{--                    </select>--}}
{{--                    <div class="clear"></div>--}}
{{--                    <em>Rooms</em>--}}
{{--                    <select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">--}}
{{--                        <option>1</option>--}}
{{--                        <option>1</option>--}}
{{--                        <option>2</option>--}}
{{--                        <option>3</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="fl1 fl2">--}}
{{--                    <em>Children</em>--}}
{{--                    <select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">--}}
{{--                        <option>0</option>--}}
{{--                        <option>0</option>--}}
{{--                        <option>1</option>--}}
{{--                        <option>2</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="clear"></div>--}}
{{--                <div class="tmTextarea">--}}
{{--                    <textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>--}}
{{--                </div>--}}
{{--                <a href="#" class="btn" data-type="submit">Submit</a>--}}
{{--            </form>--}}
{{--        </div>--}}


        <div class="grid_12">
            <h3 >Latest Vehicle</h3>
        </div>
  <br> <br> <br>
            @foreach($last as $rs)
                <div class="grid_4">
                    <div class="banner">
                        {{--              ahmed soracagim  <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"></a>--}}
                        <img src="{{ Storage::url($rs->image)}}" style="height:200px; width: 263px;" alt="">
                        <div class="label">
                            <div class="title">{{$rs->title}}</div>
                            <div class="price">Price<span>{{$rs->price_km}}</span></div>
                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">Reserve</a>
                        </div>
                    </div>
                </div>

        @endforeach
    </div>

@endsection
