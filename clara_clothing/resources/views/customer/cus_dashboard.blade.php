<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clara Clothing - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/cus_dashboard.css">
    <link rel="stylesheet" href="/css/layout.css">

    {{-- data tables css cdn --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/datatables.min.css"/>
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



{{-- --------------------------------------------------Custormer Dashboard------------------------------------------------- --}}

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><b>Clara Clothing</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Men
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">All Clothing</a></li>
            <li><a class="dropdown-item" href="#">T-shirt</a></li>
            <li><a class="dropdown-item" href="#">Formal Shirts</a></li>
            <li><a class="dropdown-item" href="#">Casual Shirts</a></li>
            <li><a class="dropdown-item" href="#">Formal Trousers</a></li>
            <li><a class="dropdown-item" href="#">Casual Trousers</a></li>
            <li><a class="dropdown-item" href="#">Shorts</a></li>
            <li><a class="dropdown-item" href="#">Shoes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Women
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">All Clothing</a></li>
            <li><a class="dropdown-item" href="#">Dresses</a></li>
            <li><a class="dropdown-item" href="#">Tops</a></li>
            <li><a class="dropdown-item" href="#">pants</a></li>
            <li><a class="dropdown-item" href="#">Jeans</a></li>
            <li><a class="dropdown-item" href="#">Shorts</a></li>
            <li><a class="dropdown-item" href="#">Skirts</a></li>
            <li><a class="dropdown-item" href="#">Overcoats</a></li>
            <li><a class="dropdown-item" href="#">Shoes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kids
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">All Kids</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">All Boys</a></li>
            <li><a class="dropdown-item" href="#">Shirts</a></li>
            <li><a class="dropdown-item" href="#">T-shirts</a></li>
            <li><a class="dropdown-item" href="#">Pants</a></li>
            <li><a class="dropdown-item" href="#">shorts</a></li>
            <li><a class="dropdown-item" href="#">Nightwear</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">All Girls</a></li>
            <li><a class="dropdown-item" href="#">T-Shirts</a></li>
            <li><a class="dropdown-item" href="#">Dresses</a></li>
            <li><a class="dropdown-item" href="#">Pants & Leggings</a></li>
            <li><a class="dropdown-item" href="#">Shorts</a></li>
            <li><a class="dropdown-item" href="#">Nightwear</a></li>
          </ul>
        </li>

        @auth

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cart.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <span class="badge rounded-pill badge-notification bg-danger mb-">3</span>
  </a>
          </a>
      </li>
      <li class="nav-item dropdown">
          <a
          class="btn btn-secondary-outline dropdown-toggle hidden-arrow"
          href="#"
          type="button" data-bs-toggle="dropdown" aria-expanded="false"
          >
          <img
              src="{{auth()->user()->profile_photo_path ? asset('storage/' . auth()->user()->profile_photo_path) : asset('/images/user/duser.png')}}"
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
                      <a class="dropdown-item" href="/user/profile">My profile</a>
                  </li>
                  <li>
                      <a class="dropdown-item" href="/dashboard">Dashboard</a>
                  </li>
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  </li>
              </ul>
      </li>

      @else
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/login">Login</a>
      </li>
      @endauth

      </ul>

            <form role="search" class="d-flex" action="search.html">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
      </div>

   
          
  </div>
</nav>

      {{-----------------------------------------NAVBAR END------------------------------------------------------------- --}}

    {{-----------------------------------------------Header Banner-------------------------------------------------------  --}}
<x-header href="#dash">
  {{ Breadcrumbs::render('cus_dashboard') }}

</x-header>


{{-- --------------------------------------------------End of Header Section------------------------------------------------- --}}

{{-- --------------------------------------------------Custormer Dashboard------------------------------------------------- --}}
<div class="wrapper" id="dash">
    <header>Custormer dashboard</header>
    <input type="radio" name="slider" checked id="dashboard">
    <input type="radio" name="slider" id="orders">
    <input type="radio" name="slider" id="cart">
    <input type="radio" name="slider" id="messages">
    <input type="radio" name="slider" id="profile">
    <nav>
      <label for="dashboard" class="home"><i class="fa-solid fa-gauge-high"></i>Dashboard</label>
      <label for="orders" class="blog"><i class="fa-solid fa-arrow-down-wide-short"></i>Orders</label>
      <label for="cart" class="code"><i class="fa-solid fa-cart-shopping"></i>Cart</label>
      <label for="messages" class="help"><i class="far fa-envelope"></i>Messages</label>
      <label for="profile" class="about"><i class="far fa-user"></i>Profile</label>
      <div class="slider"></div>
    </nav>
    <section>
      <div class="content content-1" id="orderdashbord">
        <div class="title">This is Custormer Dashboard</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero aspernatur nobis provident dolores molestias quia quisquam laborum, inventore quis, distinctioa, fugit repudiandae delectus sunt ipsam! Odio illo at quia doloremque fugit iops, asperiores? Consectetur esse officia labore voluptatum blanditiis molestias dic voluptas est, minima unde sequi, praesentium dicta suscipit quisquam iure sed, nemo.</p>
      </div>
      <div class="content content-2">
        <div class="title">This is Orders</div>



        <table id="ordertabel" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011-07-25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009-01-12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011-07-25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009-01-12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012-03-29</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008-11-28</td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012-12-02</td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012-08-06</td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010-10-14</td>
                    <td>$327,900</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009-09-15</td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008-12-13</td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008-12-19</td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013-03-03</td>
                    <td>$342,000</td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
      </div>

      {{----------------------------------------------------End Of Order dashboard------------------------------------------------------------------------------ --}}
      <div class="content content-3">
        <div class="title">This is a cart</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, debitis nesciunt! Consectetur officiis, libero nobis dolorem pariatur quisquam temporibus. Labore quaerat neque facere itaque laudantium odit veniam consectetur numquam delectus aspernatur, perferendis repellat illo sequi excepturi quos ipsam aliquid est consequuntur.</p>
      </div>
      <div class="content content-4">
        <div class="title">This is Messages</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit null itaq, odio repellat asperiores vel voluptatem magnam praesentium, eveniet iure ab facere officiis. Quod sequi vel, rem quam provident soluta nihil, eos. Illo oditu omnis cumque praesentium voluptate maxime voluptatibus facilis nulla ipsam quidem mollitia! Veniam, fuga, possimus. Commodi, fugiat aut ut quorioms stu necessitatibus, cumque laborum rem provident tenetur.</p>
      </div>
      <div class="content content-5">
        <div class="title">This is a Manage Profile</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur officia sequi aliquam. Voluptatem distinctio nemo culpa veritatis nostrum fugit rem adipisci ea ipsam, non veniam ut aspernatur aperiam assumenda quis esse soluta vitae, placeat quasi. Iste dolorum asperiores hic impedit nesciunt atqu, officia magnam commodi iusto aliquid eaque, libero.</p>
      </div>
    </section>
  </div>




{{-- --------------------------------------------------End of Custormer Dashboard------------------------------------------------- --}}


          {{---------------------------------------------------Footer-------------------------------------------------- --}}

           <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted my-3">
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




    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
          $('#ordertabel').DataTable( {
              dom: 'Bfrltip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          } );
      } );
      
        </script>

  </body>
</html>