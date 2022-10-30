<x-layout>
<x-header href="#product">
    {{ Breadcrumbs::render('contactus') }}
</x-header>


    <div class="container" id="product">

      <!--Grid row-->
      <div class="row mt-5">

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Section: Sidebar -->
          <section>

            <!-- Section: Categories -->
            <section>

              <h5>Subcategories</h5>

              <div class="text-muted small text-uppercase mb-5">
                <p class="mb-4">return to <a href="#!" class="card-link-secondary"><strong>Clothing, Shoes,
                      Accessories</strong></a></p>

                <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">Dresses</a></p>
                <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">Dresses</a></p>
                <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">Dresses</a></p>
                <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">Dresses</a></p>
                <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">Dresses</a></p>
                <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">Dresses</a></p>
                <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">Dresses</a></p>
              </div>

            </section>
            <!-- Section: Categories -->

            <!-- Section: Filters -->
            <section>

              <h5 class="pt-2 mb-4">Filters</h5>

              <section class="mb-4">

                <div class="md-form md-outline mt-0 d-flex justify-content-between align-items-center">
                  <input type="text" id="search12" class="form-control mb-0" placeholder="Search...">
                  <a href="#!" class="btn btn-flat btn-md px-3 waves-effect"><i class="fas fa-search fa-lg"></i></a>
                </div>

              </section>

              <!-- Section: Condition -->
              <section class="mb-4">

                <h6 class="font-weight-bold mb-3">Brand</h6>

                <div class="brandsm">
                    <div class="blogo"><img src="{{asset('/images/brands/1.png')}}" alt="" srcset=""></div>
                    <div class="blogo"><img src="{{asset('/images/brands/2.png')}}" alt="" srcset=""></div>
                    <div class="blogo"><img src="{{asset('/images/brands/3.png')}}" alt="" srcset=""></div>
                    <div class="blogo"><img src="{{asset('/images/brands/4.png')}}" alt="" srcset=""></div>
                    <div class="blogo"><img src="{{asset('/images/brands/5.png')}}" alt="" srcset=""></div>
                    <div class="blogo"><img src="{{asset('/images/brands/6.png')}}" alt="" srcset=""></div>
                    <div class="blogo"><img src="{{asset('/images/brands/7.png')}}" alt="" srcset=""></div>
                    <div class="blogo"><img src="{{asset('/images/brands/8.png')}}" alt="" srcset=""></div>
                  </div>

              </section>
              <!-- Section: Condition -->

              <!-- Section: Average -->
              <section class="mb-4">

                <h6 class="font-weight-bold mb-3">Avg. Customer Review</h6>

            

              </section>
              <!-- Section: Average -->

              <!-- Section: Price -->
              <section class="mb-4">

                <h6 class="font-weight-bold mb-3">Price</h6>

                <div class="form-check pl-0 mb-3">
                  <input type="radio" class="form-check-input" id="under25" name="materialExampleRadios">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="under25">Under
                    Rs.1000</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="2550">Rs.1000 to Rs.2000</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="radio" class="form-check-input" id="50100" name="materialExampleRadios">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="50100">Rs.2000 to Rs.3000</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="radio" class="form-check-input" id="100200" name="materialExampleRadios">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="100200">Rs.3000 to Rs.5000</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="radio" class="form-check-input" id="200above" name="materialExampleRadios">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="200above">Rs.5000 & Above</label>
                </div>
                <form>
                  <div class="d-flex align-items-center mt-4 pb-1">
                    <div class="md-form md-outline my-0">
                      <input id="from" type="text" class="form-control mb-0">
                      <label for="form">$ Min</label>
                    </div>
                    <p class="px-2 mb-0 text-muted"> - </p>
                    <div class="md-form md-outline my-0">
                      <input id="to" type="text" class="form-control mb-0">
                      <label for="to">$ Max</label>
                    </div>
                  </div>
                </form>

              </section>
              <!-- Section: Price -->


              <!-- Section: Size -->
              <section class="mb-4">

                <h6 class="font-weight-bold mb-3">Size</h6>

                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="34">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="34">S</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="36">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="36">M</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="38">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="38">L</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="40">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="40">XL</label>
                </div>
                {{-- <a class="btn btn-link text-muted p-0" data-toggle="collapse" href="#collapseExample"
                  aria-expanded="false" aria-controls="collapseExample">
                  More
                </a> --}}
                <div class="collapse pt-3" id="collapseExample">
                  <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="42">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="42">42</label>
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="44">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="44">44</label>
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="46">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="46">46</label>
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="50">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="50">50</label>
                  </div>
                </div>

              </section>
              <!-- Section: Size -->

            </section>
            <!-- Section: Filters -->

          </section>
          <!-- Section: Sidebar -->

        </div>
        <!--Grid column-->













        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!-- Section: Block Content -->

          <!-- Section: Block Content -->

          <!--Section: Block Content-->
          <section>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->

                <!-- Card -->
                <div class="col-md-4 mb-5">
                    <div class="product-box position-relative">
                        <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">
        
                        <div class="card-btn">
                          <a class="btn btn-white rounded-pill" href="customer/show">View</a>
                        </div>
                    </div>
        
                    <div class="product-info">
                        <div class="product-name">
                            <h6>Givo sheila tiered sleeveless
                                maxi dress
                                </h6>
                        </div>
                        <div class="product-price">
                            <h5>Rs 2850.00</h5>
                        </div>
                    </div>
                </div>
                <!-- Card -->

              <!-- Grid column -->

                            <!-- Grid column -->

                <!-- Card -->
                <div class="col-md-4 mb-5">
                    <div class="product-box position-relative">
                        <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">
        
                        <div class="card-btn">
                          <a class="btn btn-white rounded-pill" href="customer/show">View</a>
                        </div>
                    </div>
        
                    <div class="product-info">
                        <div class="product-name">
                            <h6>Givo sheila tiered sleeveless
                                maxi dress
                                </h6>
                        </div>
                        <div class="product-price">
                            <h5>Rs 2850.00</h5>
                        </div>
                    </div>
                </div>
                <!-- Card -->

              <!-- Grid column -->

                            <!-- Grid column -->

                <!-- Card -->
                <div class="col-md-4 mb-5">
                    <div class="product-box position-relative">
                        <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">
        
                        <div class="card-btn">
                          <a class="btn btn-white rounded-pill" href="customer/show">View</a>
                        </div>
                    </div>
        
                    <div class="product-info">
                        <div class="product-name">
                            <h6>Givo sheila tiered sleeveless
                                maxi dress
                                </h6>
                        </div>
                        <div class="product-price">
                            <h5>Rs 2850.00</h5>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                

                                <!-- Card -->
                                <div class="col-md-4 mb-5">
                                    <div class="product-box position-relative">
                                        <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">
                        
                                        <div class="card-btn">
                                          <a class="btn btn-white rounded-pill" href="customer/show">View</a>
                                        </div>
                                    </div>
                        
                                    <div class="product-info">
                                        <div class="product-name">
                                            <h6>Givo sheila tiered sleeveless
                                                maxi dress
                                                </h6>
                                        </div>
                                        <div class="product-price">
                                            <h5>Rs 2850.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->


                                                <!-- Card -->
                <div class="col-md-4 mb-5">
                    <div class="product-box position-relative">
                        <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">
        
                        <div class="card-btn">
                          <a class="btn btn-white rounded-pill" href="customer/show">View</a>
                        </div>
                    </div>
        
                    <div class="product-info">
                        <div class="product-name">
                            <h6>Givo sheila tiered sleeveless
                                maxi dress
                                </h6>
                        </div>
                        <div class="product-price">
                            <h5>Rs 2850.00</h5>
                        </div>
                    </div>
                </div>
                <!-- Card -->

                                <!-- Card -->
                                <div class="col-md-4 mb-5">
                                    <div class="product-box position-relative">
                                        <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">
                        
                                        <div class="card-btn">
                                          <a class="btn btn-white rounded-pill" href="customer/show">View</a>
                                        </div>
                                    </div>
                        
                                    <div class="product-info">
                                        <div class="product-name">
                                            <h6>Givo sheila tiered sleeveless
                                                maxi dress
                                                </h6>
                                        </div>
                                        <div class="product-price">
                                            <h5>Rs 2850.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->

              <!-- Grid column -->



            </div>
            <!-- Grid row -->

  
            <!-- Grid row -->

          </section>
          <!--Section: Block Content-->

          <!-- Section: Block Content -->
          <section>
              <div class="col-12 col-md-4 text-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-circle justify-content-center float-md-right mb-0">
                    <li class="page-item"><a class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link"><i class="fas fa-chevron-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>

          </section>
          <!-- Section: Block Content -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
 


</x-layout>