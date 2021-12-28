{{--<div class="slider_wrapper">--}}
{{--    <div id="camera_wrap" class="">--}}
{{--        @php--}}
{{--        $i=0;--}}
{{--        @endphp--}}

{{--    @foreach($slider as $rs)--}}
{{--            @php--}}
{{--            $i+= 1;--}}
{{--            @endphp--}}
{{--          <div class="banner active">--}}
{{--                <img src=" {{asset(Storage::url('images/'.$rs->image)) }}" style="height:992px" alt="">--}}
{{--            <div class="caption fadeIn">--}}
{{--                <h2>{{$rs->title}}</h2>--}}
{{--                <div class="price">--}}
{{--                    {{$rs->price}}--}}
{{--                </div>--}}
{{--                <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">LEARN MORE</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--</div>--}}


<div class="slider_wrapper">
    <div id="camera_wrap" class="">
        @foreach($slider as $rs)
            <div data-src="{{asset('storage/'.$rs->image)}}" style="height:750px">
                <div class="caption fadeIn">
                    <h2>{{$rs->title}}</h2>
                    <div class="price">
                        {{$rs->price}}
                    </div>
                    <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">LEARN MORE</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



