@extends('layouts.home')

@section('title', 'Contact -' . $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="container_12">
            <div class="grid_5">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="success-message">Contact Information</h3>
                        {!! $setting->contact !!}
                    </div>
                   <div class="col-md-5">
                       <h3 class="success-message"> Form Contactt</h3>
                       <div class="grid_6 prefix_1">
                           <h3>GET IN TOUCH</h3>
                           <form id="form">
                               <label class="name">
                                   <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
                                   <span class="empty-message">*This field is required.</span>
                                   <span class="error-message">*This is not a valid name.</span>
                               </label>
                               <label class="email">
                                   <input type="text" placeholder="Email:" data-constraints="@Required @Email" />
                                   <span class="empty-message">*This field is required.</span>
                                   <span class="error-message">*This is not a valid email.</span>
                               </label>
                               <label class="country">
                                   <input type="text" placeholder="Country:" data-constraints="@Required @JustLetters"/>
                                   <span class="empty-message">*This field is required.</span>
                                   <span class="error-message">*This is not a valid phone.</span>
                               </label>
                               <label class="message">
                                   <textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                   <span class="empty-message">*This field is required.</span>
                                   <span class="error-message">*The message is too short.</span>
                               </label>
                               <div>
                                   <div class="clear"></div>
                                   <div class="btns">
                                       <a href="#" data-type="reset" class="btn">Clear</a>
                                       <a href="#" data-type="submit" class="btn">Submit</a>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection
