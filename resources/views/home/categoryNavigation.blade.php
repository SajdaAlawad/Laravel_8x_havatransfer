@php
    $parentCategory = \App\Http\Controllers\HomeController::categoryList()
@endphp

<li class="dropdown" @if (!isset($page)) @endif><a class="dropdown-toggle" href="#" data-toggle="dropdown">Categories</a>
    <ul class="dropdown-menu" role="menu">
        @foreach($parentCategory  as $category)
            @if(count($category->children))
                @include('home.categoryTree',['children'=>$category->children])
            @else
                <li><a href="#">{{$category->title}}</a></li>
            @endif
        @endforeach
    </ul>
</li>
