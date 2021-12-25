
<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">{{$children->first()->parent->title}}</a>
<ul class="dropdown-menu" role="menu">
    @foreach($children  as $category)
        @if(count($category->children))
{{--         @include('home.categoryTree',['children'=>$category->children])--}}
        @else
            <li><a href="#">{{$category->title}}</a></li>
        @endif
    @endforeach
</ul>
</li>
