<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'kaedoors Link') }} @yield('title')</title>
    <meta name="description" content="Shop from your favourite restaurant online and have your item ready before your arrival or delivered to your doorstep!">
    <meta name="keywords" content="jos resaurants, vendors, fast delivery">
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="{{ asset('responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick-1.8.1/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick-1.8.1/slick/slick.css') }}">
    <link href="{{ asset('aos/css/aos.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/jquery.modal.min.css') }}" />
</head>
<body>




<!--
  <div class="loader">

        <div class="wrapper">
        <div class="loader-gif">
         </div>
        </div>

        <div style="margin-top: 200px; margin-left: -90px;">
        <p style="font-size: 18px;">Loading . . .</p>
        </div>
      </div>   -->




    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-white" href="/home">Kaedoors Link</a>
            <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse offset-md-1" id="navbarNav">

              <ul class="navbar-nav">



                <li class="nav-item">
                  <a class="nav-link   text-white {{  request()->is('/*') ? 'active' : '' }}" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 280px;">
                   @if(!empty($companies))
                    @foreach($companies as $company)

                    <div class="dropdown-item">
                      <a href="{{ route('products.index', ['subdomain' => $company->subdomain]) }}" class="restaurant-name"><img src="{{ productImage($company->company_logo)}}" alt="" width="50px" class="img-responsive" /> <span class=" offset-md-2">{{$company->company_name}}</span></a>
                      </div>
                      @endforeach
@endif
                      <div class="text-center">
                      <a href="/featured" class="btn btn-fullmenu">Feaured</a>
                      </div>
                    </div>
                 </li>



                <li class="nav-item">
                    <a class="nav-link text-white" href="contact-us.html">Contact Us</a>
                  </li>




                  @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                    <a class="nav-link text-white {{  request()->is('login*') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                  </li>



                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                    <a class="nav-link text-white {{  request()->is('register*') ? 'active' : '' }}" href="{{ route('register') }}">Sign Up</a>
                  </li>
                            @endif
                        @else


                            <li class="nav-item dropdown">




                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item"> Profile </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

              </ul>

            </div>
            <a href="profile.html" class="profile" title="My Profile">
            <i class="fa fa-user person" aria-hidden="true"></i>
            </a>
            <a href="/cartitems" class="shop-cart">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class='badge badge-warning' id='lblCartCount'> {{Cart::count()}}</span>
                <span style="font-size: 20px;"><b>Cart</b></span>
                </a>
          </nav>

            @yield('content')


    <br><br>
          <footer class="footer-area text-white">
              <br>
              <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                        <p class="foot-head">Kaedoors Link</p>
                        <ul class="">
                            <li><a href="#" class="foot-link text-white">Home</a></li>
                            <li><a href="menu.html" class="foot-link text-white">Our Menu</a></li>
                            <li><a href="sign-up.html" class="foot-link text-white">Sign Up</a></li>
                            <li><a href="contact-us.html" class="foot-link text-white">Contact Us</a></li>
                        </ul>
                        </div>
                     <div class="col-md-4">
                         <p class="foot-head">Contact Us</p>
                         <ul class="">
                             <li><i class="fa fa-home" aria-hidden="true"></i> Address : Behind Honda Villa Utan Jos, Plateau State.</li>
                             <li><a href="#" class="foot-link text-white"><i class="fa fa-phone" aria-hidden="true"></i> Phone : +2348184751332</a></li>
                             <li><a href="#" class="foot-link text-white"><i class="fa fa-envelope" aria-hidden="true"></i> Email : support@kaedoors.com</a></li>

                         </ul>
                     </div>
                     <div class="col-md-4">
                         <p class="foot-head">Payment Information</p>
                         <ul class="">
                             <li><a href="#" class="foot-link text-white"><img src="img/credit-cards.png" alt="" width="80%" class="img-responsive"></a></li>
                             <li><a href="#" class="foot-link text-white">Kaedoors Link Wallet</a></li>
                             <li><a href="#" class="foot-link text-white">Cash After Delivery</a></li>

                         </ul>
                     </div>
                  </div>

                  <br><br>
           <div class="row">
             <div class="col-md-6">
            <p class="text-center" style="font-size: 15px;">© 2020 Kaedoors Link. All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-center">
              <a href="#" class="social-icons text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#" class="social-icons text-white"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#" class="social-icons text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            </div>
            <br>
              </div>

              <a id="button"><i class="fa fa-angle-up" style="font-size: 20px;" aria-hidden="true"></i></a>
          </footer>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('main.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery-3.1.1.min.js') }}"></script>
    @yield('extra-js')
    <script defer src="https://use.font-awesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
       <script src="{{ asset('password/js/show-password.min.js') }}"></script>
    <script>

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


    </script>
    <script src="{{ asset('aos/js/aos.js') }}"></script>
    <script>
      AOS.init();
    </script>
    <script src="{{ asset('slick-js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('slick-js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('slick-1.8.1/slick-1.8.1/slick/slick.min.js') }}"></script>

    <script>
        $('.single-item').slick({
            autoplay: true
        });

        $('.featured').slick({
  centerMode: true,
  autoplay: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
    </script>

    <!-- Pop Up modal Queries -->

    <script src="{{ asset('bootstrap/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.modal.min.js') }}"></script>

    <script>
   $(window).on('load',function(){
    setTimeout(function(){
        $('.modal').modal('show')
    }, 2000);
});
    </script>
</body>
</html>
