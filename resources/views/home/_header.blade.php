<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <div class="menu_block">
                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    <ul class="sf-menu">
                        <li class="current"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">New Products</a></li>
                        @include('home.categoryNavigation')

{{--                        <li><a href="{{route('fag')}}">FAG</a></li>--}}
                        @auth
                        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">OUR INFORMATION</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('faq')}}">Faq</a></li>
                            </ul>
                        </li>
                        @endauth
                        @auth
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Welecome: {{Illuminate\Support\Facades\Auth::user()->name}}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index_op_fullscreen_gradient_overlay.html">Profile</a></li>
                                    <li><a href="{{ route('myprofile') }}">My Account</a></li>
                                    <li><a href="{{ route('myreviews') }}">My Review</a></li>
                                    <li><a href="{{ route('user_rezervations') }}">My Rezervation</a></li>
                                    <li><a href="{{route('logout')}}">logout</a></li>
                                </ul>
                            </li>
                        @endauth
                        @guest
                            <li><a href="{{route('login')}}">LOGIN | REGISTER</a></li>
                        @endguest
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
{{--        <div class="grid_12">--}}
{{--            <h1>--}}
{{--                <a class="logo" href="{{route('home')}}">--}}
{{--                    <img src="{{ asset('assets') }}/images/logo.png" alt="Your Happy Family">--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--        </div>--}}
    </div>
</header>





