
<div class="slider_wrapper">
    <div id="camera_wrap" class="">
        @php
        $i=0;
        @endphp
        @foreach($slider as $rs)
            @php
            $i+= 1;
            @endphp
          <div class="banner @if($i==1) active @endif">
                <img src=" {{Storage::url($rs->image) }}" style="height:992px" alt="">
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





