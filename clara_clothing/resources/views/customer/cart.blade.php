<x-layout>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
          <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Cart</h5>
                </div>
                <div class="card-body">
                  @foreach ($cart as $c)

                  <!-- Single item -->
                  <div class="row">
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                      <!-- Image -->
                      <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                        <img src="{{asset('uploads/'.$c->image1)}}"
                          class="w-100" alt="Blue Jeans Jacket" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                      </div>
                      <!-- Image -->
                    </div>

                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                      <!-- Data -->
                      <p><strong>{{$c->name}}</strong></p>
                      <p>Single price - RS. {{$c->price}}</p>
                      <input type="hidden" id="pri" value="{{$c->price}}">
                      <p>Size: {{$c->size}}</p>
                      <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                        title="Remove item">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                        title="Move to the wish list">
                        <i class="fas fa-heart"></i>
                      </button>
                      <!-- Data -->
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                      <!-- Quantity -->
                      <div class="d-flex mb-4" style="max-width: 300px">
                        <!-- <button class="btn btn-primary px-1 me-2" style="max-height: 36px;"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button> -->

                        <div class="form-outline">
                          <input id="qu" min="1" onchange="calpri()" name="quantity" value="{{$c->qun}}" type="number" class="form-control" />
                          <label class="form-label" for="form1">Quantity</label>
                        </div>

                        <!-- <button class="btn btn-primary px-1 ms-2" style="max-height: 36px;"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button> -->
                      </div>
                      <!-- Quantity -->

                      <!-- Price -->
                      <p class="text-start text-md-center">
                        <strong>Total Amount is RS. </strong><strong id="tot"></strong>
                      </p>
                      <!-- Price -->
                    </div>
                  </div>
                  <!-- Single item -->

                  @endforeach

                  <hr class="my-4" />


                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body">
                  <p><strong>Expected shipping delivery</strong></p>
                  <p class="mb-0">12.10.2020 - 14.10.2020</p>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                <div class="card-body">
                  <p><strong>We accept</strong></p>
                  <img class="me-2" width="45px"
                    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                    alt="Visa" />
                  <img class="me-2" width="45px"
                    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                    alt="American Express" />
                  <img class="me-2" width="45px"
                    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                    alt="Mastercard" />
                  <img class="me-2" width="45px"
                    src="https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom.svg"
                    alt="PayPal acceptance mark" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Summary</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                      Products
                      <span>Rs.4500</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      Delivery
                      <span>Rs.450</span>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                        <strong>Total amount</strong>
                        <strong>
                          <p class="mb-0">(including VAT)</p>
                        </strong>
                      </div>
                      <span><strong>Rs.4950.00</strong></span>
                    </li>
                  </ul>

                  <a type="button" class="btn btn-primary btn-md btn-block" href="/customer/checkout">
                    Go to checkout
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>

            let price = document.getElementById('pri').value;
            document.getElementById('tot').innerHTML = price;
            let qu = document.getElementById('qu');

            function calpri() {
                let qun = qu.value;
                let tot = price*qun;
                document.getElementById('tot').innerHTML = tot;
            }


      </script>
</x-layout>
