<div class="row mt-5 align-items-center">
    <div class="col-md-2 text-center mb-5">
        <div class="avatar avatar-xl">
            <img src="{{ asset('assets') }}/images/facekiz.jfif" alt="..." class="avatar-img rounded-circle">
        </div>
    </div>
    <div class="col">
        <div class="row mb-4">
         <div class="col-md-7">
            <h4 class="mb-1">User Panel</h4>
           <div class="col">
            <li><a href="{{route('myprofile')}}">My Profile</a></li>
            <li><a href="#">My Reservation</a></li>
            <li><a href="#">My Shopcart</a></li>
            <li><a href="#">My Messages</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
           </div>
         </div>
        </div>
    </div>
</div>
