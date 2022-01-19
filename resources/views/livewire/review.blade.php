<div >
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
     @endif
    <form wire:submit.prevent="store()">
         @csrf
        <div class="form-group">
            <input class="input" wire:model="subject" placeholder="Subject" />
            @error('subject') <span class="empty-message">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <textarea wire:model="review"  placeholder="Your Review:" rows="7" style="width: 200px"></textarea>
            @error('review') <span class="empty-message">{{$message}}</span>@enderror
        </div>
        <div class="input-group">
            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
            <strong class="text-uppercase">Your Rating: </strong>
            <div class="txt-center">

                <div class="rating">
                    <input id="star5" name="rate"  wire:model="rate" type="radio" value="5" class="radio-btn hide" />
                    <label class="starlabel" for="star5">☆</label>
                    <input  id="star4" name="rate"  wire:model="rate" type="radio" value="4" class="radio-btn hide" />
                    <label class="starlabel" for="star4">☆</label>
                    <input id="star3" name="rate"  wire:model="rate" type="radio" value="3" class="radio-btn hide" />
                    <label class="starlabel" for="star3">☆</label>
                    <input  id="star2" name="rate"  wire:model="rate" type="radio" value="2" class="radio-btn hide" />
                    <label class="starlabel" for="star2">☆</label>
                    <input id="star1" name="rate"  wire:model="rate" type="radio" value="1" class="radio-btn hide" />
                    <label class="starlabel" for="star1">☆</label>
                    <div class="clear"></div>
                </div>

            </div>
        </div>
        @auth
{{--            <input type="submit" class="btn btn-success" value="Save"></input>--}}
            <button class="btn btn-success" type="submit">Save</button>
        @else
            <a href="/login" class="primary-btn">For Submit Your Review Please Login </a>
        @endauth
    </form>
</div>

