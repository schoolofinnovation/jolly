         <main>
           <!-- Payment methods accordion-->
            <h2 class="h6 pb-3 mb-2">Choose payment method</h2>{{$paymentmode}}
            
            <div class="accordion mb-2" id="payment-method">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <a class="accordion-button collapsed" href="#card" data-bs-toggle="collapse" value="card" wire:model="paymentmode">
                    <i class=" bi bi-card fs-lg me-2 mt-n1 align-middle"></i>Pay with Credit Card</a></h3>
                <div class="accordion-collapse collapse " id="card" data-bs-parent="#payment-method">
                  <div class="accordion-body">
                    <p class="fs-sm">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="{{asset('image/cards.png')}}" width="187" alt="Cerdit Cards"></p>
                    

                    <form class="credit-card-form row" wire>
                      <div class="mb-3 col-sm-6">
                        <input class="form-control jp-card-invalid" type="text" name="number" placeholder="Card Number" required="">
                      </div>
                      <div class="mb-3 col-sm-6">
                        <input class="form-control jp-card-invalid" type="text" name="name" placeholder="Full Name" required="">
                      </div>
                      <div class="mb-3 col-sm-3">
                        <input class="form-control jp-card-invalid" type="text" name="expiry" placeholder="MM/YY" required="">
                      </div>
                      <div class="mb-3 col-sm-3">
                        <input class="form-control jp-card-invalid" type="text" name="cvc" placeholder="CVC" required="">
                      </div>
                      <div class="col-sm-6">
                        <button class="btn btn-outline-primary d-block w-100 mt-0" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <a class="accordion-button collapsed" href="#paypal" data-bs-toggle="collapse" value="cod" wire:model="paymentmode"><i class="ci-paypal me-2 align-middle"></i>Pay with PayPal</a></h3>
                <div class="accordion-collapse collapse" id="paypal" data-bs-parent="#payment-method">
                  <div class="accordion-body fs-sm">
                    <p><span class="fw-medium">PayPal</span> - the safer, easier way to pay</p>
                    <form class="row needs-validation" method="post" novalidate="">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <input class="form-control" type="email" placeholder="E-mail" required="">
                          <div class="invalid-feedback">Please enter valid email address</div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <input class="form-control" type="password" placeholder="Password" required="">
                          <div class="invalid-feedback">Please enter your password</div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-between align-items-center"><a class="nav-link-style" href="#">Forgot password?</a>
                          <button class="btn btn-primary" type="submit">Log In</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#points" data-bs-toggle="collapse" value="paypal" wire:model="paymentmode">
                  <i class="ci-gift me-2"></i>Redeem Reward Points</a></h3>
                <div class="accordion-collapse collapse" id="points" data-bs-parent="#payment-method">
                  <div class="accordion-body">
                    <p>You currently have<span class="fw-medium">&nbsp;384</span>&nbsp;Reward Points to spend.</p>
                    <div class="form-check d-block">
                      <input class="form-check-input" type="checkbox" id="use_points">
                      <label class="form-check-label" for="use_points">Use my Reward Points to pay for this order.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Navigation (desktop)-->
            <div class="d-none d-lg-flex pt-4">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="checkout-shipping.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Shipping</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-review.html"><span class="d-none d-sm-inline">Review your order</span><span class="d-inline d-sm-none">Review order</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
            </div>
          </main>