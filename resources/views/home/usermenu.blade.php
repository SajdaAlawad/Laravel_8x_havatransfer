@auth
<div class="row mt-5 align-items-center">
    <div class="">
        <div class="">
         <div class="">
            <h4 class="mb-1">User Panel</h4>
           <div class="col">
            <li><a href="{{route('myprofile')}}">My Profile</a></li>
            <li><a href="{{route('user_rezervations')}}">My Reservation</a></li>
            <li><a href="{{route('myreviews')}}">My Review</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
               @php
                   $userRoles = Auth::user()->roles->pluck('name');
               @endphp
               @if($userRoles->contains('admin'))
                   <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
                @endif
           </div>
         </div>
        </div>
    </div>
</div>
@endauth
