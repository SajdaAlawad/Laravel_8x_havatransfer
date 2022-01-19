
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



