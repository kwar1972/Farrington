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
              <a href="whome" class="navbar-brand">
                <img src="/img/logo.png" alt="Image Description" style="max-width: 170px;">
              </a>
              <!-- End Logo -->
      
              <!-- Navigation -->
              <div class="js-mega-menu collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                <ul class="navbar-nav text-uppercase g-font-weight-600 mx-auto">
                  <li class="nav-item g-mx-20--lg">
                    <a href="whome" class="nav-link px-0 g-color-primary--hover">Home</a>
                  </li>
                  <li class="nav-item hs-has-sub-menu g-mx-20--lg active">
                    <a href="#!" class="nav-link px-0 g-color-primary--hover">About Us
                        <!-- Submenu -->
                        <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling g-bg-black-opacity-0_4" id="nav-submenu-1" aria-labelledby="nav-link-1">
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="compprof">Company Profile</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="tradingben">Trading Benefits</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="meetteam">Meet the Team</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                        </ul>
                    </a>
                  </li>
                  <li class="nav-item hs-has-sub-menu g-mx-20--lg active">
                    <a href="#!" class="nav-link px-0 g-color-primary--hover">Trading Tools
                        <!-- Submenu -->
                        <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling g-bg-black-opacity-0_4" id="nav-submenu-1" aria-labelledby="nav-link-1">
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="acctype">Account Types</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="liveaccount">Live Account</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="tradingplatforms">Trading Platforms</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                        </ul>
                    </a>
                  </li>
                  <li class="nav-item hs-has-sub-menu g-mx-20--lg active">
                    <a href="#!" class="nav-link px-0 g-color-primary--hover">Services
                        <!-- Submenu -->
                        <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling g-bg-black-opacity-0_4" id="nav-submenu-1" aria-labelledby="nav-link-1">
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="#!">Equity Stock</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="#!">Forex Trading</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                            <li class="dropdown-item">
                              <a class="nav-link g-px-0 g-color-white g-color-primary--hover" href="#!">Commodities</a>
                              <hr class="g-color-white mt-0 mb-0">
                            </li>
                        </ul>
                    </a>
                  </li>
                  <li class="nav-item g-mx-20--lg">
                    <a href="#!" class="nav-link px-0 g-color-primary--hover">FAQ</a>
                  </li>
                  <li class="nav-item g-ml-20--lg g-mr-0--lg">
                    <a href="#!" class="nav-link px-0 g-color-primary--hover">Contact Us</a>
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