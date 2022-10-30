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

              <h5>Categories</h5>

              <div class="text-muted small text-uppercase mb-5">
                {{-- <p class="mb-4">return to <a href="#!" class="card-link-secondary"><strong>Clothing, Shoes,
                      Accessories</strong></a></p> --}}

                @foreach ($cat as $c)
                    <p class="mb-3"><a href="#!" class="text-secondary text-decoration-none">{{$c->catagoryname}}</a></p>
                @endforeach

              </div>

            </section>
            <!-- Section: Categories -->

            <!-- Section: Filters -->
            <section>

              <h5 class="pt-2 mb-4">Filters</h5>

              <section class="mb-4">

                <div class="md-form md-outline mt-0 d-flex justify-content-between align-items-center">
                    <form action="/" class="d-flex">
                        <input type="text" id="search12" class="form-control mb-0" placeholder="Search..." name="psearch">
                        <button type="submit" class="btn btn-flat btn-md px-3 waves-effect"><i class="fas fa-search fa-lg"></i></button>
                    </form>
                </div>

              </section>

              <!-- Section: Condition -->
              {{-- <section class="mb-4">

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

              </section> --}}
              <!-- Section: Condition -->


              {{-- <!-- Section: Price -->
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
                {{-- <div class="collapse pt-3" id="collapseExample">
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
              <!-- Section: Size -->  --}}

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
                @foreach($products as $product)
                {{-- Access listings by componenets --}}
                <x-card :product="$product" />
                @endforeach
                <!-- Card -->







          <!-- Section: Block Content -->
          <section>
            {{$products->links('pagination::bootstrap-5')}}
            </div>

          </section>
          <!-- Section: Block Content -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>



</x-layout>
