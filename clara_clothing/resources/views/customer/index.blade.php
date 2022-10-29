<x-layout>


              {{-----------------------------------------Slider Start------------------------------------------------------------- --}}

      <div class="clear-fix"></div>
      <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>

            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('/images/slider/1.jpg')}}" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/slider/2.jpg')}}" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/slider/3.jpg')}}" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/slider/4.jpg')}}" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/slider/5.jpg')}}" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/slider/6.jpg')}}" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/slider/7.jpg')}}" class="d-block w-100" alt="...">

              </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
         </div>
      </header>

          {{-----------------------------------------Slider End------------------------------------------------------------- --}}


           {{-----------------------------------------Category Section------------------------------------------------------------- --}}
           <div class="container-fluid my-5">
            <div class="row my-4 row row-cols-1 row-cols-sm-2 row-cols-md-4">
              <div class="col features d-flex justify-content-center fw-bold"><i class="fa-solid fa-truck-arrow-right fa-2x text-danger mx-3"></i> Island-Wide Delivery</div>
              <div class="col features d-flex justify-content-center fw-bold"><i class="fa-solid fa-money-bill-transfer fa-2x text-danger mx-3"></i> Cash on Delivery</div>
              <div class="col features d-flex justify-content-center fw-bold"><i class="fa-regular fa-credit-card fa-2x text-danger mx-3"></i> Secure Payments</div>
              <div class="col features d-flex justify-content-center fw-bold"><i class="fa-solid fa-shirt fa-2x text-danger mx-3"></i> Unlimited Unique Designs</div>
             </div>
           </div>

<div class="container my-5 d-flex justify-content-center">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col category-box">
          <div class="card card-image rounded-0" style="
            background:rgba(0, 0, 0, 0.5)url({{asset('images/categories/men.jpg')}});
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            background-blend-mode: darken;">
            <!-- Content -->
            <div class="inner-line">

            </div>
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 card-title">
                <h3><strong>MEN'S</strong></h3>
            </div>
          </div>
      </div>

      <div class="col category-box">
        <div class="card card-image rounded-0"
          style="background:rgba(0, 0, 0, 0.5)url({{asset('images/categories/women.jpg')}}); background-size: cover; background-position: center center; width: 100%; height: 100%; background-blend-mode: darken;">
          <div class="inner-line">

        </div>
          <!-- Content -->
          <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 card-title">

              <h3><strong>WOMEN'S</strong></h3>

          </div>
        </div>
    </div>

    <div class="col category-box">
      <div class="card card-image rounded-0"
        style="background:rgba(0, 0, 0, 0.5)url({{asset('images/categories/kids.jpg')}}); background-size: cover; background-position: center center; width: 100%; height: 100%; background-blend-mode: darken;">
        <div class="inner-line">

        </div>
        <!-- Content -->
        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 card-title">

            <h3><strong>KID'S</strong></h3>

        </div>
      </div>
  </div>


  </div>
</div>

           {{-- -------------------------------------------Category end--------------------------------------------------------------------- --}}

          {{------------------------------------------------Product Section--------------------------------------------------------------------}}
<div class="container">
    <div class="row">

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="product-box position-relative">
                <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">

                <div class="card-btn">
                    <button class="btn btn-white rounded-pill">View</button>
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

        <div class="col-md-3">
            <div class="product-box position-relative">
                <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">

                <div class="card-btn">
                    <button class="btn btn-white rounded-pill">View</button>
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

        <div class="col-md-3">
            <div class="product-box position-relative">
                <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">
                <div class="card-btn">
                    <button class="btn btn-white rounded-pill">View</button>
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

        <div class="col-md-3">
            <div class="product-box position-relative">
                <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">

                <div class="card-btn">
                    <button class="btn btn-white rounded-pill">View</button>
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

    </div>
</div>



          {{------------------------------------------------Product Section End--------------------------------------------------------------------}}



          {{-- -------------------------------------------Brands Section start--------------------------------------------------------------------- --}}
        <div class="brandwrapper">
          <div class="brands">
            <div class="blogo"><img src="{{asset('/images/brands/1.png')}}" alt="" srcset=""></div>
            <div class="blogo"><img src="{{asset('/images/brands/2.png')}}" alt="" srcset=""></div>
            <div class="blogo"><img src="{{asset('/images/brands/3.png')}}" alt="" srcset=""></div>
            <div class="blogo"><img src="{{asset('/images/brands/4.png')}}" alt="" srcset=""></div>
            <div class="blogo"><img src="{{asset('/images/brands/5.png')}}" alt="" srcset=""></div>
            <div class="blogo"><img src="{{asset('/images/brands/6.png')}}" alt="" srcset=""></div>
            <div class="blogo"><img src="{{asset('/images/brands/7.png')}}" alt="" srcset=""></div>
            <div class="blogo"><img src="{{asset('/images/brands/8.png')}}" alt="" srcset=""></div>
          </div>
        </div>




          {{-- -------------------------------------------Brands Section start--------------------------------------------------------------------- --}}

</x-layout>
