
@section('page_title','Wishlist')


@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')


@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')
<main>
  <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{asset('/')}}"><i class=" bi bi-house-fill"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{asset('/wishlist')}}"><i class=" bi bi-chevron-right"></i>Whislist</a>
                </li>
                <!--<li class="breadcrumb-item text-nowrap active" aria-current="page"><i class=" bi bi-chevron-right"></i>Grid right sidebar</li>-->
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">My Wishlist Franchise</h1>
          </div>
        </div>
      </div>


      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
              <div class="d-flex flex-wrap">
               
              <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                  <label class="text-light fs-sm opacity-75 text-nowrap me-2 d-none d-sm-block" for="sorting">Sort by:</label>
                  <select class="form-select"  wire:model="sorting">
                    <!--<option value="default" selected="selected">Popularity</option>-->
                    <option value="area">High - Low Area</option>
                    <!--<option value="">Average Rating</option>-->
                    <option value="investment"  selected="selected">Low - Hight Investment</option>
                   <!-- <option value="">High - Low Investment</option>-->
                    <option value="date">Latest</option>
                    
                  </select>
                  <span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">of {{Cart::instance('wishlist')->count()}} Franchises</span>
                </div>

                <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                <label class="text-light fs-sm opacity-75 text-nowrap me-2 d-none d-sm-block" for="sorting">Per Page:</label>
                <select class="form-select"  wire:model="pagesize">
                <option value="12" selected="selected">12 per page</option>
                            <option value="16">16 per page</option>
                            <option value="18">18 per page</option>
                            <option value="21">21 per page</option>
                            <option value="24">24 per page</option>
                            <option value="30">30 per page</option>
                            <option value="32">32 per page</option>
                </select>
          
            </div>
              </div>
             

              
            </div>

            <!-- Products grid-->
            <div class="row mx-n2">
            

        @if(Cart::instance('wishlist')->content()->count() > 0)
            @foreach (Cart::instance('wishlist')->content() as $item)
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">

                <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                <div class="product-card-actions d-flex align-items-center">
              <a class="btn-action nav-link-style me-2" href="">
              <i class="bi bi-shuffle me-1"></i>Compare</a>

             
                  <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$item->model->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                  <i class=" bi bi-heart-fill"></i></button>
                
                 </div>

                  <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $item->model->slug])}}">
                  <img src="{{url('Storage/brands/'.$item->model->image)}}" alt="{{Str::limit($item->model->brand_name, 24)}}"></a>
                  <div class="card-body py-2">
                  <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $item->model->slug])}}">{{$item->model->category->industry}}</a>
                     <!--<h3 class="product-title fs-sm"><a href="">{{Str::limit($item->model->brand_name, 24)}}</a></h3>-->
               
                <div class="d-flex justify-content-between">
                  <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $item->model->slug])}}"><strong>{{Str::limit($item->model->brand_name, 24)}}</strong></a></h3></div>
                  <div class="star-rating align-center"><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  </div>
                </div>

                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text">
                      <small>Investment (lacs.)</small></span>
                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                      </div>
                      
                      <div class="star-rating">
                      <span class="text">
                      <small>{{$item->model->max_investment}} - {{$item->model->min_investment}}</small></span>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text">
                      <small>Area required (sqm.)</small></span>
                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                      </div>

                      
                      <div class="star-rating">
                      <span class="text">
                      <small>{{$item->model->max_area}} - {{$item->model->min_area}} </small></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <!--<div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                        <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="blue">
                        <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="yellow">
                        <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="pink">
                        <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                      </div>-->
                    </div>

                    <div class="d-flex mb-2">
                      
                      <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('franchise.details',['slug' => $item->model->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                      <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('franchise.details',['slug' => $item->model->slug])}}"><i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                      
                      </div>
                      <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $item->model->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                   
                  </div>
                
                </div>
                <hr class="d-sm-none">
              </div>
              @endforeach
            </div>
            @else
            <h4 class="text-center">No items in wishlist

            
            </h4>
            @endif


            <!-- Banner-->
            <!--<div class="py-sm-2">
              <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-3">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                  <h4 class="fs-lg fw-light mb-2">Converse All Star</h4>
                  <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                </div><img class="d-block ms-auto" src="{{asset ('assets/images/04.jpg')}}" width="100" alt="Shop Converse">
              </div>
            </div>-->
            <!-- Products grid-->
            <div class="row mx-n2">

               <!-- Product-->
               <!--<div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card"><span class="badge bg-danger badge-shadow">Sale</span>
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s T-shirt</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                        <del class="fs-sm text-muted">38.<small>50</small></del>
                      </div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                        <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="blue">
                        <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="yellow">
                        <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="pink">
                        <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                      </div>
                    </div>
                    <div class="d-flex mb-2">
                      <select class="form-select form-select-sm me-2">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                      <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    </div>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>-->

            </div>
            <hr class="my-3">
          

           
          </section>



          <!-- Sidebar-->
          <aside class="col-lg-4">
          @livewire('aside-component')
          </aside>
        </div>
      </div>

      
</main>