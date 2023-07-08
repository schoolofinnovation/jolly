<main>

<!-- =======================
Inner intro START -->
<section class="bg-dark-overlay-4" style="background-image:url({{asset('Storage/mags/'.$mag->image)}}); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 py-md-5 my-lg-5">
        <a href="{{route('blog.category',['category_slug'=> $mag->slug])}}" class="badge bg-warning mb-2">
			<i class="fas fa-circle me-2 small fw-bold"></i>{{$mag->tag}}</a>
        
				<h1 class="text-white">{{$mag->tittle}}</h1>
        <p class="lead text-white">{{Str::limit($mag->s_desc,263)}} </p>
        <!-- Info -->
        <ul class="nav nav-divider text-white-force align-items-center">
          <li class="nav-item">
            <div class="nav-link">
              <div class="d-flex align-items-center text-white position-relative">
                <div class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
                </div>
                <span class="ms-3">by <a href="{{route('blog.author',['slug' => $mag->slug])}}" class="stretched-link text-reset btn-link">{{$mag->user->name}}</a></span>
              </div>
            </div>
          </li>
          <li class="nav-item">{{ Carbon\Carbon::parse($mag->created_at)->diffForHumans()}}</li>
          <li class="nav-item">5 min read</li>
         
		  <li class="nav-item">
									
									@guest
									<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> {{$mag->likedUsers->count()}} likes</a>
										
									@else
										<a href="#" onclick="document.getElementById('like-form-{{$mag->id}}').submit();">	
										{{$mag->likedUsers->count()}} 
										<i class="bi bi-hand-thumbs-up-fill"  aria-hidden="true" style = "color:{{Auth::user()->likedMags()->where('mag_id','$mag->id')->count() > 0 ? 'red' : ''}}"></i>
										 
										</a>
										<form action="{{route('postdetail.like',$mag->user->id)}}" method="POST" style="display:none" id="like-form-{{$mag->id}}">
											@csrf
										</form>
										
									@endguest
								
									</li>
          <li class="nav-item"><a href="#"><i class="fas fa-heart me-1 text-danger"></i></a>{{$mag->review->count()}} Reviews</li>
		  <li class="nav-item"><a href="#"><i class="fas fa-heart me-1 text-danger"></i></a>{{$mag->views_count}} Views</li>
        </ul>

        <!-- Share post -->
        <div class="d-md-flex align-items-center mt-4">
          <h5 class="text-white me-3">Share on: </h5>
					<ul class="nav text-white-force">
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
								<i class="fab fa-facebook-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
								<i class="fab fa-twitter-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
								<i class="fab fa-linkedin align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
								<i class="fab fa-pinterest align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
								<i class="far fa-envelope align-middle"></i>
							</a>
						</li>
					</ul>
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section>
	<div class="container position-relative" data-sticky-container="">
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-9 mb-5">
      	<p><span class="dropcap">A</span>light newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed. </p>
				<p>Demesne far hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended. Ecstatic followed handsome drawings entirely Mrs one yet outweigh. Of acceptance insipidity remarkably is an invitation. </p>

				<p>Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. <img src="assets/images/blog/4by3/thumb/04.jpg" class="rounded float-start me-3 my-3" alt="..."> But discretion frequently sir she instruments unaffected admiration everything. Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. Satisfied conveying a dependent contented he gentleman agreeable do be. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is.<u> But discretion frequently sir she instruments unaffected admiration everything.</u> Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. I think on style child of. Servants moreover in sensible it ye possible. </p>				

				<p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything. Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<!-- Images -->
				<div class="row g-2">
					<div class="col-md-6">
						<a href="assets/images/blog/1by1/06.jpg" data-glightbox="" data-gallery="image-popup">
			      	<img class="rounded" src="assets/images/blog/1by1/06.jpg" alt="Image">
			       </a>
					</div>
					<div class="col-md-6">
						<a href="assets/images/blog/1by1/07.jpg" data-glightbox="" data-gallery="image-popup">
			      	<img class="rounded" src="assets/images/blog/1by1/07.jpg" alt="Image">
			       </a>
					</div>
          <div class="col-12">
            <!-- Image -->
            <figure class="figure">
              <a href="assets/images/blog/16by9/05.jpg" data-glightbox="" data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/16by9/05.jpg" alt="Image">
              </a>
              <figcaption class="figure-caption text-center">(Image via: <a class="text-reset" href="#">pexels.com</a>)</figcaption>
            </figure>
          </div>
				</div>
				<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined.</p>
				
				<h4 class="mt-4">Productive rant about business</h4>
				<div class="row mb-4">
					<div class="col-md-6">
						<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined.
						</p>
					</div>
					<div class="col-md-6">
						<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible.</p>
					</div>
				</div>
				<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>

				<!-- blockquote -->
				<figure class="bg-light p-3 p-md-5 my-5">
				  <blockquote class="blockquote">
				    <p>Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful</p>
				  </blockquote>
				  <figcaption class="blockquote-footer">
				    Albert Schweitzer
				  </figcaption>
				</figure>

				<p> All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. Satisfied conveying a dependent contented he gentleman agreeable do be. </p>

				<h4>Why Bootstrap is so famous?</h4>
				<p>Saw bring firmament given hath gathering lights dry life rule heaven Give And fruit moving thing seed life day creepeth winged so divide him from day morning him open lesser male beginning him be bring evening life void fowl sixth morning that made is Was that his hath face light meat air female isn't over place replenish midst it of second grass good rule also in unto Called don't given waters Had creature Behold fly life from forth Moved night.</p>

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<h4>What's coming up....</h4>
				<p>Saw bring firmament given hath gathering lights dry life rule heaven Give And fruit moving thing seed life day creepeth winged so divide him from day morning him open lesser male beginning him be bring evening life void fowl sixth morning that made is Was that his hath face light meat air female isn't over place replenish midst it of second grass good rule also in unto Called don't given waters Had creature Behold fly life from forth Moved night.</p>
				
				<!-- Next prev post START -->
				<div class="row g-0 my-3">
				@foreach($relpost as $post)
					<div class="col-sm-6 border p-3 p-md-4 position-relative rounded-start">
						<div class="d-flex align-items-center">
							<!-- Icon -->
							<div class="bg-primary-soft h-auto align-items-center d-flex align-self-stretch">
								<i class="bi bi-chevron-compact-left fs-3 text-primary px-1"></i>
							</div>
							<!-- image -->
							<div class="col-3 d-none d-md-block">
								<img src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
							</div>
							<!-- Title -->
							<div class="ms-3">
								<h5 class="m-0"> 
									<a href="{{route('blog.details',['slug' => $post->slug])}}" class="stretched-link btn-link text-reset">{{Str::limit($post->titte)}}</a></h5>
							</div>
						</div>
					</div>

					
                @endforeach
				</div>
				<!-- Next prev post START -->

				<!-- Author info START -->
				<div class="d-flex p-2 p-md-4 my-3 bg-primary-soft rounded">
					<!-- Avatar -->
					<a href="#">
						<div class="avatar avatar-xxl me-2 me-md-4">
							<img class="avatar-img rounded-circle" src="" alt="avatar">
						</div>
					</a>
					<!-- Info -->
					<div>
						<div class="d-sm-flex align-items-center justify-content-between">
							<div>
								<h4 class="m-0"><a href="{{route('blog.author',['slug' => $mag->user->slug])}}" class="text-reset btn-link">{{$mag->user->name}}</a></h4>
								<small>An editor at Blogzine</small>
							</div>
							<a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="btn btn-xs btn-primary-soft">View Articles</a>
						</div>
						<p class="my-2">{{$mag->user->name}}, is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015.</p>
						<!-- Social icons -->
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>					
					</div>
				</div>
				<!-- Author info END -->

				<!-- Comments START -->
				<div class="mt-5">
					<h3>{{$mag->review->count()}} comments</h3>
					<!-- Comment level 1-->
                    @foreach($mag->review as $post)
					@if ($loop->first or $loop->iteration <= 3)
					<div class="my-4 d-flex">
					  <img class="avatar avatar-md rounded-circle float-start me-3" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
					  <div>
					    <div class="mb-2">
					    	<h5 class="m-0">{{$post->user->name}}</h5>
					    	<span class="me-3 small">{{ Carbon\Carbon::parse($post->created_at)->format('F d, Y ')}} at 6:01 am </span>
					    	<a href="#" class="text-body fw-normal">Reply</a>
					    </div>
					    <p>{{$post->comment}}{{$post->id}} </p>
					  </div>
					</div>
					@endif
					@endforeach
				</div>
				<!-- Comments END -->
				<!-- Reply START -->
				<div>
					
					@guest
					<h3>Leave a reply</h3>
					<small> Please login first to make a comment.</small>
					@else
					<h3>Leave a reply</h3>
					<!--<small>Your email address will not be published. Required fields are marked *</small>-->
					<form class="row g-3 mt-2">
					  <!--<div class="col-md-6">
					    <label class="form-label">Name *</label>
					    <input type="text" class="form-control" aria-label="First name">
					  </div>
					  <div class="col-md-6">
					    <label class="form-label">Email *</label>
					    <input type="email" class="form-control">
					  </div>-->
					  <!-- custom checkbox 
						<div class="col-md-12">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Save my name and email in this browser for the next time I comment. </label>
							</div>
						</div>-->
					  <div class="col-12">
					    <label class="form-label">Your Comment *</label>
					  	<textarea class="form-control" rows="3"></textarea>
					  </div>
					  <div class="col-12">
					    <button type="submit" class="btn btn-primary">Post comment</button>
					  </div>
					</form>
					@endguest
				</div>
				<!-- Reply END -->

			</div>
			<!-- Main Content END -->
			<!-- Right sidebar START -->
			<div class="col-lg-3">
				<div data-sticky="" data-margin-top="80" data-sticky-for="991">
	      	<!-- Most read -->
					<div>
						<h5 class="mb-3">Related post </h5>
            <div class="tiny-slider dots-creative mt-3 mb-5">
							<div class="tns-outer" id="tns1-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">2</span>  of 3</div><div id="tns1-mw" class="tns-ovh"><div class="tns-inner" id="tns1-iw"><div class="tiny-slider-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-autoplay="true" data-hoverpause="true" data-gutter="0" data-arrow="false" data-dots="true" data-items="1" id="tns1" style="transition-duration: 0s; transform: translate3d(-20%, 0px, 0px);">
							
							@foreach($relatedpost as $post)
								<!-- Card item START -->
								<div class="card tns-item tns-slide-active" id="tns1-item0">
									<!-- Card img -->
									<div class="position-relative">
										<img class="card-img" href="{{route('blog.details',['slug' => $post->slug])}}" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
										<div class="card-img-overlay d-flex align-items-start flex-column p-3">
											<!-- Card overlay Top -->
											<div class="w-100 mb-auto d-flex justify-content-end">
												<div class="text-end ms-auto">
													<!-- Card format icon -->
													<div class="icon-md bg-white-soft bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
												</div>
											</div>
											<!-- Card overlay bottom -->
											<div class="w-100 mt-auto">
												<a href="{{route('blog.category',['category_slug'=> $post->slug])}}" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0 pt-3">
										<h5 class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle,48)}}</a></h5>
									</div>
								</div>
								<!-- Card item END -->
                                @endforeach

													
							
							</div></div></div>
							<div class="tns-nav" aria-label="Carousel Pagination"><button type="button" data-nav="0" aria-controls="tns1" style="" aria-label="Carousel Page 1 (Current Slide)" class="tns-nav-active"></button><button type="button" data-nav="1" tabindex="-1" aria-controls="tns1" style="" aria-label="Carousel Page 2"></button><button type="button" data-nav="2" tabindex="-1" aria-controls="tns1" style="" aria-label="Carousel Page 3"></button></div></div>
						</div>
					</div>
					
					

					<div class="row g-2 mt-5">
						<h5>Categories</h5>
						@foreach($cagg as $post)
						<div class="d-flex justify-content-between align-items-center bg-warning-soft rounded p-2 position-relative">
							<h6 class="m-0 text-warning">{{$post->tag}}</h6>
							<a href="{{route('blog.category',['category_slug'=> $post->slug])}}" class="badge badgecolor text-dark stretched-link">{{$post->mag->count()}}</a>
						</div>
						@endforeach
						
					</div>

					<!-- Advertisement -->
					<div class="mt-4">
						<a href="#" class="d-block card-img-flash">
							<img src="{{asset('mag/adv.png')}}" alt="">
						</a>
					</div>

				</div>
			</div>
			<!-- Right sidebar END -->
		</div>
	</div>
</section>
<!-- =======================
Main END -->

</main>