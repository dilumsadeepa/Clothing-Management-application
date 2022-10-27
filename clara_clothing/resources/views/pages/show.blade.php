<x-layout>
    <section id="productDetails" class="pb-5">

        <!--News card-->
        <div class="card mt-5 hoverable">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="row mx-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-inner px-2">
                              <div class="carousel-item active">
                                <img src="{{asset('images/slider/1.jpg')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/slider/3.jpg')}}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                            <div class="d-flex px-2 my-1" style="min-width: 80px; height:auto;">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="{{asset('images/slider/1.jpg')}}" class="d-block w-100" alt="..."></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100" alt="..."></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img src="{{asset('images/slider/3.jpg')}}" class="d-block w-100" alt="..."></button>
                              </div>
                          </div>
                    </div>

                
                </div>
                <div class="col-lg-5 mr-3 text-center text-md-left">
                    <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                        <strong>Blouse </strong>
                    </h2>
                    <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
                    </strong>
                    </h2>
                    <span class="badge badge-success product mb-4 ml-2">SALE</span>
                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                        <span class="red-text font-weight-bold">
                            <strong>Rs.1200</strong>
                        </span>
                        <span class="grey-text">
                            <small>
                                <s>Rs.1500.00</s>
                            </small>
                        </span>
                    </h3>

                    <p class="ml-xl-0 ml-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque nemo neque ut officiis
                        nostrum incidunt maiores, magni optio et sunt suscipit iusto nisi totam quis, nobis mollitia
                        necessitatibus.
                    </p>
                    <p class="ml-xl-0 ml-4">
                        <strong>Color Available: </strong>Black, Blue, White</p>
                    <p class="ml-xl-0 ml-4">
                        <strong>Size: </strong>S, M, L, XL</p>
                    <p class="ml-xl-0 ml-4">
                        <strong>Availability: </strong>In stock</p>

                    <!-- Add to Cart -->
                    <section class="color">
                        <div class="mt-5">
                            <p class="grey-text">Choose your color</p>
                            <div class="row text-center text-md-left">

                                <div class="col-md-4 col-12 ">
                                    <form action="" method="post">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input class="form-check-input" name="group100" type="radio" id="radio100" checked="checked">
                                        <label for="radio100" class="form-check-label dark-grey-text">White</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input class="form-check-input" name="group100" type="radio" id="radio101">
                                        <label for="radio101" class="form-check-label dark-grey-text">Black</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input class="form-check-input" name="group100" type="radio" id="radio102">
                                        <label for="radio102" class="form-check-label dark-grey-text">Blue</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 mb-4">
                                <div class="col-md-12 text-center text-md-left text-md-right">
                                        <input type="number" name="" id="" style="max-width: 60px">
                                        <button class="btn btn-primary btn-rounded" type="submit">
                                            <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </section>
                    <!-- /.Add to Cart -->
                </div>
            </div>
        </div>
        <!--News card-->

    </section>


</x-layout>