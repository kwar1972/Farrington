
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Steiner Greves</title>

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

<body>
  <main>
    @include('layouts.web.header')
        <!-- Content -->
    @yield('content')
        <!-- Footer -->
    @include('layouts.web.footer')
    </div>
    <!-- ./wrapper -->
    @yield('javascript')
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

 <!-- JS Implementing Plugins -->
 <script  src="{{ asset('assets/vendor/appear.js') }}"></script>

 <!-- JS Unify -->
 <script  src="{{ asset('assets/js/components/hs.onscroll-animation.js') }}"></script>

<!-- JS Unify -->
<script  src="{{ asset('assets/js/components/hs.carousel.js') }}"></script>

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
            "Steiner Greves"
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

      $('#animated').hover(function(e){
        $('#animated').init('[data-animation]');  
        console.log('SI');
      });

  $(document).ready(function () {
    // initialization of scroll animation
    $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
  });

  $(document).ready(function () {
    // initialization of carousel
    $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

    $('#js-carousel-sync-for').on('init', function (event, slick) {
      $(slick.$slides).css('height', 'auto');
    });

    $('#js-carousel-sync-nav').on('init', function (event, slick) {
      $(slick.$slides).css('height', 'auto');
    });
  });
  </script>
</body>

</html>

