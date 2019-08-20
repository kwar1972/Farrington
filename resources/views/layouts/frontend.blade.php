
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Farrington</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/icons/css/all.css" rel="stylesheet') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-etlinefont/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line-pro/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-hs/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/typedjs/typed.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hamburgers/hamburgers.min.css') }}">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{ asset('assets/css/unify-core.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/unify-components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/unify-globals.css') }}">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body class=" bkg-login">
  <main>



<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="300">
  <div class="u-header__section u-header__section--dark g-bg-black-opacity-0_4 g-transition-0_3 g-py-10" data-header-fix-moment-exclude="g-bg-black-opacity-0_4 g-py-10" data-header-fix-moment-classes="g-bg-black-opacity-0_7 g-py-0">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <!-- Responsive Toggle Button -->
        <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
          <span class="hamburger hamburger--slider">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
          </span>
          </span>
        </button>
        <!-- End Responsive Toggle Button -->

        <!-- Logo -->
        <a href="../../../index.html" class="navbar-brand">
          <img src="/img/logo.png" alt="Image Description" style="max-width: 150px;">
        </a>
        <!-- End Logo -->

        <!-- Navigation -->
        <div class="js-mega-menu collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
          <ul class="navbar-nav text-uppercase g-font-weight-600 mx-auto">
            <li class="nav-item g-mx-20--lg">
              <a href="#!" class="nav-link px-0 g-color-primary--hover">Home
            
          </a>
            </li>
            <li class="nav-item g-mx-20--lg">
              <a href="#!" class="nav-link px-0 g-color-primary--hover">About Us
            
          </a>
            </li>
            <li class="nav-item hs-has-sub-menu g-mx-20--lg active">
              <a href="#!" class="nav-link px-0 g-color-primary--hover">Services
                  <!-- Submenu -->
                  <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling g-bg-black-opacity-0_4" id="nav-submenu-1" aria-labelledby="nav-link-1">
                      <li class="dropdown-item">
                        <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="#!">Business Growth</a>
                        <hr class="g-color-white mt-0 mb-0">
                      </li>
                      <li class="dropdown-item">
                        <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="#!">Product Solutions</a>
                        <hr class="g-color-white mt-0 mb-0">
                      </li>
                  </ul>
              </a>
            </li>
            <li class="nav-item g-mx-20--lg">
              <a href="#!" class="nav-link px-0 g-color-primary--hover">Pages
            
          </a>
            </li>
            <li class="nav-item g-mx-20--lg">
              <a href="#!" class="nav-link px-0 g-color-primary--hover">Demos
            
          </a>
            </li>
            <li class="nav-item g-ml-20--lg g-mr-0--lg">
              <a href="#!" class="nav-link px-0 g-color-primary--hover">What's New
            
          </a>
            </li>
            
          </ul>
          <ul class="navbar-nav text-uppercase g-font-weight-600 pull-right">
              <!-- Pages - Login &amp; Signup -->
            <li class="nav-item g-mx-20--lg">
                  @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/home') }}" class="nav-link px-0 g-color-primary--hover">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="nav-link px-0 d-inline-block g-color-primary--hover"><i class="fa fa-sign-in g-color-primary"></i> Login</a><span class="g-color-primary"> | </span>
                          <a href="{{ route('register') }}" class="nav-link px-0 d-inline-block g-color-primary--hover"><i class="fa  fa-sign-out g-color-primary"></i> Register</a>
                      @endauth
                  </div>
                  @endif
          </li>
          <!-- End Pages - Login &amp; Signup -->
          </ul>
        </div>
        <!-- End Navigation -->
      </div>
    </nav>
  </div>
</header>
<!-- End Header -->
  
      @yield('content') 

    </footer>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>


  <!-- JS Implementing Plugins -->
  <script src="{{ asset('assets/vendor/appear.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
  <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>
  <script src="{{ asset('assets/vendor/typedjs/typed.min.js') }}"></script>

  <!-- JS Unify -->
  <script src="{{ asset('assets/js/hs.core.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.carousel.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
  <script src="{{ asset('assets/js/helpers/hs.hamburgers.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.tabs.js') }}"></script>
  <script src="{{ asset('assets/js/components/text-animation/hs.text-slideshow.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>

  <!-- JS Customization -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "awesome",
            "creative",
            "unify"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>







</body>

</html>

