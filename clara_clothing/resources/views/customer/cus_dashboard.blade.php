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

      /* ------------------------------------------------Order Tracking --------------------------------------------------------------- */
       
        @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

.horizontal-timeline .items {
border-top: 2px solid #ddd;
}

.horizontal-timeline .items .items-list {
position: relative;
margin-right: 0;
}

.horizontal-timeline .items .items-list:before {
content: "";
position: absolute;
height: 8px;
width: 8px;
border-radius: 50%;
background-color: #ddd;
top: 0;
margin-top: -5px;
}

.horizontal-timeline .items .items-list {
padding-top: 15px;
}


      /* ------------------------------------------------End of Order Tracking --------------------------------------------------------------- */




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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">T-Shirts</a></li>
            <li><a class="dropdown-item" href="#">Dresses</a></li>
            <li><a class="dropdown-item" href="#">Pants & Leggings</a></li>
            <li><a class="dropdown-item" href="#">Shorts</a></li>
            <li><a class="dropdown-item" href="#">Nightwear</a></li>
          </ul>
        </li>

        @auth

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/customer/cart">
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
              height="30"
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
        
        <div class="container-fluid">
          <section>
            <div class="row">
              <div class="col-12 mt-3 mb-1">
                <h5 class="text-uppercase">Statistics</h5>
                <p>Statistics on {{date('Y-m-d')}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-12 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between p-md-1">
                      <div class="d-flex flex-row">
                        <div class="align-self-center">
                          <i class="fa-solid fa-cart-shopping text-info fa-3x me-4"></i>
                        </div>
                        <div>
                          <h4>Total Orders</h4>
                          <p class="mb-0">Total Orders upto now</p>
                        </div>
                      </div>
                      <div class="align-self-center">
                        <h2 class="h1 mb-0">18</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-12 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between p-md-1">
                      <div class="d-flex flex-row">
                        <div class="align-self-center">
                          <i class="fa-solid fa-cart-shopping text-success fa-3x me-4"></i>
                        </div>
                        <div>
                          <h4>Completed Orders</h4>
                          <p class="mb-0">Total Completed Orders</p>
                        </div>
                      </div>
                      <div class="align-self-center">
                        <h2 class="h1 mb-0">14</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-12 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between p-md-1">
                      <div class="d-flex flex-row">
                        <div class="align-self-center">
                          <h2 class="h1 mb-0 me-4">4</h2>
                        </div>
                        <div>
                          <h4>On The Way Deliveries</h4>
                          <p class="mb-0">Total Uncompleted Orders</p>
                        </div>
                      </div>
                      <div class="align-self-center">
                        <i class="fa-solid fa-truck-fast text-danger fa-3x"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-12 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between p-md-1">
                      <div class="d-flex flex-row">
                        <div class="align-self-center">
                          <h2 class="h1 mb-0 me-4">24</h2>
                        </div>
                        <div>
                          <h4>Total Ordered Items</h4>
                          <p class="mb-0">No of items ordered all the time</p>
                        </div>
                      </div>
                      <div class="align-self-center">
                        <i class="fa-solid fa-gifts text-warning fa-3x"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

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


        {{-- ------------------------------------------------Order Receipt With Tracking Functionality------------------------------------------------------------------ --}}

        <div class="container my-5">
          <div class="row row-cols-1 row-cols-md-2 g-3">

       

         <div class="col">
           <div class="card h-100 p-2">
             <div class="card-body">
             <!-- <div class="card border-top border-bottom border-3" style="border-color: #352e69 !important;"> -->

               <div class="d-flex justify-content-between">
                 <div class="flexitem"><p class="lead fw-bold mb-5" style="color: #352e69;">Purchase Reciept</p></div>
                 <div class="flexitem"><p class="lead  mb-5" style="color: #352e69;">Clara Clothing</p></div>
                 </div>
             
                 <div class="row">
                   <div class="col mb-3">
                     <p class="small text-muted mb-1">Date</p>
                     <p>2022-Oct-29 16:42:41</p>
                   </div>
                   <div class="col mb-3">
                     <p class="small text-muted mb-1">Order No</p>
                     <p>52</p>
                   </div>
                   <div class="col mb-3">
                       <p class="small text-muted mb-1">User Name</p>
                       <p>peter pan</p>
                     </div>
                 </div>

                 <div class="row">
                   <div class="col mb-3">
                     <p class="small text-muted mb-1">Contact No</p>
                     <p>0701234567</p>
                   </div>
                   <div class="col mb-3">
                     <p class="small text-muted mb-1">Address</p>
                     <p>House no. 123, horana, colombo</p>
                   </div>
                   <div class="col mb-3">
                       <p class="small text-muted mb-1">Payment Method</p>
                       <p> Cash on delivery</p>
                     </div>
                 </div>
     
                 <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                   <div class="row">
                                           <div class="col-md-8 col-lg-9">
                       <p>Blue Blouse (1) , White Shorts (3) </p>
                     </div>
                     <div class="col-md-4 col-lg-3">
                       <p>Rs. 3900/-</p>
                     </div>
                     
                   </div>

                   </div>
                   <div class="row">
                       <div class="col-md-8 col-lg-9">
                         <p class="mb-0">Total Discount</p>
                       </div>
                       <div class="col-md-4 col-lg-3">
                         <p class="mb-0 text-left">Rs. 300/-</p>
                       </div>
                     </div>
                 </div>
                 
     
                 <div class="row my-4">
                   <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                     <p class="lead fw-bold mb-0" style="color: #352e69;">Grand Total <span class="grand">Rs. 3600/-</span> </p>
                   </div>
                 </div>
     

                 <div class="d-flex justify-content-between">
                
                 <div class="flexit">
                                        <p class="lead fw-bold mb-4 pb-2" style="color: #352e69;">Order Status: <span class="text-danger fs-6"> Pending</span> </p>
                 </div>
               </div>

               <p class="lead fw-bold mb-4 pb-2" style="color: #352e69;">Tracking Order</p>

            <div class="row">
              <div class="col-lg-12">

                <div class="horizontal-timeline">

                  <ul class="list-inline items d-flex justify-content-between">
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #2f2293;">Ordered</p
                        class="py-1 px-2 rounded text-white" style="background-color: #352e69;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #352e69;">Ready To Go</p
                        class="py-1 px-2 rounded text-white" style="background-color: #352e69;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #2f2293;">On the way
                      </p>
                    </li>
                    <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                      <p style="margin-right: -8px;">Delivered</p>
                    </li>
                  </ul>

                </div>

              </div>
            </div>
     
                 <p class="mt-4 pt-2 mb-0">Want any help? <a href="contactus.php" style="color: #352e69;">Please contact
                     us</a></p>

           </div>
         </div>

         
       </div>
       </div>



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
       
<section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="{{auth()->user()->profile_photo_path ? asset('storage/' . auth()->user()->profile_photo_path) : asset('/images/user/duser.png')}}"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 150px; z-index: 1">
              <a class="btn btn-outline-dark" data-mdb-ripple-color="dark" href="/user/profile"
                style="z-index: 1;">
                Edit profile
              </a>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
              <h5>{{auth()->user()->name}}</h5>
              <p>{{auth()->user()->email}}</p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1">
              <div>
                <p class="mb-1 h5">15</p>
                <p class="small text-muted mb-0">Total Ordered Items</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">3</p>
                <p class="small text-muted mb-0">No Of Orders</p>
              </div>
              <div>
                <p class="mb-1 h5">{{date('Y-m-d', strtotime(auth()->user()->created_at))}}</p>
                <p class="small text-muted mb-0">Member Since</p>
              </div>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">Status</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">Regular Customer</p>
                <p class="font-italic mb-1">No Of Finished Deliveries : 1</p>
                <p class="font-italic mb-0">On the Way : 2</p>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0">Recent Ordered items</p>
              <p class="mb-0"><a href="/custormer/orders" class="text-muted">Show all</a></p>
            </div>
            

            <section style="background-color: #eee;">
              <div class="py-5">
                <div class="row justify-content-center mb-3">
                  <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                              <div class="text-danger mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                              </div>
                              <span>22</span>
                            </div>
                            <div class="mt-1 mb-0 text-muted small">
                              <span>
                                @php
                                $des="There are many variations of passages of Lorem Ipsum available, but the
                              majority have suffered alteration in some form"  
                              @endphp
                              {{Str::limit($des, 100)}}
                              </span>
                            </div>

                            <p class="text-truncate mb-4 mb-md-0">
                             Quantity : 3
                            </p>
                          </div>
                          <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                              <h4 class="mb-1 me-1">Order Status</h4>
                            </div>
                            <h6 class="text-success">On The Way</h6>
                            <div class="d-flex flex-column mt-4">
                              <button class="btn btn-primary btn-sm" type="button">Details</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row justify-content-center mb-3">
                  <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                              <div class="text-danger mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                              </div>
                              <span>22</span>
                            </div>
                            <div class="mt-1 mb-0 text-muted small">
                              <span>
                                @php
                                $des="There are many variations of passages of Lorem Ipsum available, but the
                              majority have suffered alteration in some form"  
                              @endphp
                              {{Str::limit($des, 100)}}
                              </span>
                            </div>

                            <p class="text-truncate mb-4 mb-md-0">
                             Quantity : 3
                            </p>
                          </div>
                          <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                              <h4 class="mb-1 me-1">Order Status</h4>
                            </div>
                            <h6 class="text-success">On The Way</h6>
                            <div class="d-flex flex-column mt-4">


                              {{-- -----------------------------------------Order Details Modal--------------------------------------------------------------- --}}
                              

                              <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-circle-info"></i> Details
                              </button>

                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header border-bottom-0 d-flex justify-content-end">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i></button>
                                      </div>
                                      <div class="modal-body text-start text-black p-4">
                                        <h5 class="modal-title text-uppercase mb-5" id="exampleModalLabel"> {{auth()->user()->name}}, </h5>
                                        <h4 class="mb-2" style="color: #35558a;">Thanks for your order</h4>
                                        <h6 class="mb-0" style="color: #35558a;">Order No : 0001</h6>
                                        <h6 class="mb-4" style="color: #35558a;">Order Date : 2022-10-28</h6>
                                        <p class="mb-0" style="color: #35558a;">Payment summary</p>
                                        <hr class="mt-2 mb-4"
                                          style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">
                        


                                        <div class="d-flex justify-content-between">
                                          <p class="fw-bold mb-0">Red Blouse(Qty:1)</p>
                                          <p class="text-muted mb-0">Rs.1750.00</p>
                                        </div>
                        
                                        <div class="d-flex justify-content-between">
                                          <p class="fw-bold mb-0">Blue Skirts(Qty:1)</p>
                                          <p class="text-muted mb-0">Rs.1750.00</p>
                                        </div>
                        
                                        <div class="d-flex justify-content-between pb-1">
                                          <p class="small">Delivery Charges</p>
                                          <p class="small">Rs.200.00</p>
                                        </div>
                        
                                        <div class="d-flex justify-content-between">
                                          <p class="fw-bold">Total</p>
                                          <p class="fw-bold" style="color: #35558a;">Rs.2125.00</p>
                                        </div>
                        
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center border-top-0 py-4">
                                        <button type="button" class="btn btn-primary btn-lg mb-1" style="background-color: #35558a;">
                                          Track your order
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <button class="btn btn-primary btn-sm" type="button" onClick="window.location = '#orders';">Track Order</button>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


      </div>
    </section>
  </div>




{{-- --------------------------------------------------End of Custormer Dashboard------------------------------------------------- --}}


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
                      <a href="/shopping/allmen" class="text-reset">Mens Wear</a>
                    </p>
                    <p>
                      <a href="/shopping/allwomen" class="text-reset">Womens Wear</a>
                    </p>
                    <p>
                      <a href="/shopping/allkids" class="text-reset">Kids wear</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Home & Living</a>
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
                      <a href="#!" class="text-reset">Contact</a>
                    </p>
                    @auth
                    <p>
                      <a href="/dashboard" class="text-reset">Dashboard</a>
                    </p>
                    <p>
                      <a href="/dashboard/#orderdashbord" class="text-reset">Orders</a>
                    </p>
                    <p>
                    @endauth
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
                    <p><i class="fas fa-phone me-3"></i> + 94 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 94 234 567 89</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->
          
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © {{ date('Y') }} Copyright:
              <a class="text-reset fw-bold" href="/">claraclothing.com</a>
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