         <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="max-width: 50%;">
            <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}"></div>
            <div class="ps-3">                  
              <h3 class="text-light fs-lg mb-0">{{ucwords(trans(Auth::user()->name))}} <span class="xl-2" href="{{route('employee.account')}}"><i class="bi bi-gear-fill"></i></span> </h3>
              <span class="d-block text-light fs-ms opacity-60 py-1">Member since {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('F  Y ')}}</span>
              <span class="badge bg-success"><i class=" bi bi-check me-1"></i>Available for Business Account</span>
            </div>
          </div>


          <div class="d-flex align-items-center pb-3">
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div> 
            @endif
          </div>

          
          <div class="d-flex">
            <div class="text-sm-end me-3">
              <div class="text-light fs-base">Exhibition</div>
              <h3 class="text-light">{{$total_event->count()}}</h3>
            </div>
            <div class="text-sm-end me-3">
              <div class="text-light fs-base">Passes</div>
              <h3 class="text-light">426</h3>
            </div>
            <div class="text-sm-end me-3">
              <div class="text-light fs-base">Speaker</div>
              <h3 class="text-light">{{$total_entrants->where('entity','speaker')->count()}}</h3>
            </div>
            <div class="text-sm-end me-3">
              <div class="text-light fs-base">Exhibitor</div>
              <h3 class="text-light">{{$total_entrants->where('entity','exhibitor')->count()}}</h3>
            </div>
            <div class="text-sm-end me-3">
              <div class="text-light fs-base">Partner</div>
              <h3 class="text-light">{{$total_entrants->where('entity','partner')->count()}}</h3>
            </div>
            <div class="text-sm-end me-3">
              <span class="text-light fs-base">Requests</span>
              <h3 class="text-light">{{$total_entrants->where('entity','partner')->count()}}</h3>
            </div>

            <div class="text-sm-end">
                @if($total_event >= '0')
              <a href="{{route('employee.certified')}}" class="btn btn-primary btn-sm">Get Certified</a>
              <div class="text-light fs-xs">Know more</div>
              @else
              <div class="text-light fs-base">Exhibitor Rating</div>
              <div class="star-rating">
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star"></i>
              </div>
              <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
              @endif
            </div>

          </div>