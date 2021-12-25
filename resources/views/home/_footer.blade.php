@php
 $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Start Footer  ---->
<footer>
    <div class="container_12">
        <div class="grid_12">
            <h4>Adress</h4>
            {{$setting->company}} <br>
            {{$setting->address}} <br>
            <strong>Phone :</strong> {{$setting->phone}} <br>
            <strong>Fax :</strong> {{$setting->fax}} <br>
            <strong>Email :</strong> {{$setting->email}} <br>
            <div class="socials">
                @if ($setting->facebook != null)  <a href="{{$setting->facebook}}" target="_blank"> <i class="fa fa-facebook"></i></a>@endif
                @if ($setting->instagram != null)  <a href="{{$setting->instagram}}" target="_blank"> <i class="fa fa-instagram"></i></a>@endif
                @if ($setting->twitter != null)  <a href="{{$setting->twitter}}" target="_blank"> <i class="fa fa-twitter"></i></a>@endif
                @if ($setting->youtube != null)  <a href="{{$setting->youtube}}" target="_blank"> <i class="fa fa-youtube"></i></a>@endif
            </div>



            <div class="copy">
                Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | {{ $setting->company }}
            </div>
        </div>
    </div>
    <script>
        $(function (){
            $('#bookingForm').bookingForm({
                ownerEmail: '#'
            });
        })
        $(function() {
            $('#bookingForm input, #bookingForm textarea').placeholder();
        });
    </script>
</footer>
