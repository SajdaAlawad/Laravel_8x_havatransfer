<div >
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
     @endif


         @csrf
         <div class="form-group">
            </div>
            <div class="form-group">
             <input class="input" wire:model="subject" placeholder="Subject" />
{{--                hata messagini goderiyoruz--}}
               @error('subject') <span class="empty-message">{{$message}}</span>@enderror
             </div>
               <div class="form-group">
                   <textarea class="input" wire:model="review"  placeholder="Your Review:"></textarea>
                  @error('review') <span class="empty-message">{{$message}}</span>@enderror
               </div>
             <input class="form-group">
                 <div class="input-group">
                     @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                     <strong class="text-uppercase">Your Rating: </strong>
                 <div class="stars">
                     <input type="radio" id="star5" wire:model="rate" class="fa fa-star" value="5"/><label for="star5"></label>
                     <input type="radio" id="star5" wire:model="rate" class="fa fa-star" value="4"/><label for="star5"></label>
                     <input type="radio" id="star5" wire:model="rate" class="fa fa-star" value="3"/><label for="star5"></label>
                     <input type="radio" id="star5" wire:model="rate" class="fa fa-star" value="2"/><label for="star5"></label>
                     <input type="radio" id="star5" wire:model="rate" class="fa fa-star" value="1"/><label for="star5"></label>
                 </div>
              </div>
                @auth
                <input type="submit" class="btn btn-success" value="Save"></input>
                @else
                 <a href="/login" class="primary-btn">For Submit Your Review Please Login </a>
                 @endauth
            </form>
             </div>
            </div>
        </div>
</div>

