<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clara Clothing - Home</title>
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .search-bar{
            display: flex;
        }
        .features{
          min-width: 22%;
        }

        /* --------------------------------Brands----------------------------------- */
        .brandswrapper{
          display: flex;
          justify-content: center;
        }
        .brands{
          display: grid;
          grid-gap: 10px;
          grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
          grid-template-rows: 1fr;

        }

        .blogo{
          justify-self: center;
        }







        /* --------------------------------End Brands----------------------------------- */


        @media only screen and (max-width: 1200px){
            .search-bar{
                display: display;
            }
}

    </style>
  </head>
  <body>

    {{-----------------------------------------NAVBAR Start------------------------------------------------------------- --}}

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>Clara Clothing</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Men
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Women
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kids
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cart.html">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a
                class="btn btn-secondary-outline dropdown-toggle hidden-arrow"
                href="#"
                type="button" data-bs-toggle="dropdown" aria-expanded="false"
                >
                <img
                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                    class="rounded-circle"
                    height="25"
                    alt="Black and White Portrait of a Man"
                    loading="lazy"
                />
                </a>
                    <ul
                    class="dropdown-menu dropdown-menu-start"
                    >
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
            </li>
            </ul>

                  <form role="search" class="d-flex" action="search.html">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>


        </div>
      </nav>

          {{-----------------------------------------NAVBAR END------------------------------------------------------------- --}}


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

<div class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col category-box">
          <div class="card card-image rounded-0" style="
            background:rgba(0, 0, 0, 0.6)url({{asset('images/categories/men.jpg')}}); 
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
          style="background:rgba(0, 0, 0, 0.6)url({{asset('images/categories/women.jpg')}}); background-size: cover; background-position: center center; width: 100%; height: 100%; background-blend-mode: darken;">
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
        style="background-image: url({{asset('images/categories/kids.jpg')}}); background-size: cover; background-position: center center; width: 100%; height: 100%;">
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

        </div>

        <div class="col-md-3">
            <div class="product-box position-relative">
                <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">

                <div class="card-btn">
                    <button class="btn btn-white rounded-pill">View</button>
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
        </div>

        <div class="col-md-3">
            <div class="product-box position-relative">
                <img src="{{ asset('images/Categories/women.jpg') }}" alt="" srcset="">

                <div class="card-btn">
                    <button class="btn btn-white rounded-pill">View</button>
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

           {{---------------------------------------------------Footer-------------------------------------------------- --}}

           <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Clara Clothing
            </h6>
            <p>
               Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Mens Wear</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Womens Wear</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Kids wear</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Other</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Port City, Colombo</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Claraclothing.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


  <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
