@extends('layouts.web.app') 
@section('content')
    <!-- Promo Block -->
    <section class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-min-height-100vh g-flex-centered g-py-100" style="background-image: url(/img/header1.jpg);">
      <div class="container g-color-white text-center g-z-index-1">
        <div class="mb-5">
          <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase g-mb-30">
              We are <img class="pb-3" src="img/logo-small.png" alt="Steiner Greves"  style="max-width: 70px;">
              <span class="u-text-animation u-text-animation--typing"></span>
            </h2>
          <p class="g-font-size-24 g-color-primary g-font-weight-600">Business everywhere!</p>
        </div>

        <a class="js-go-to btn u-btn-outline-white g-color-white g-bg-white-opacity-0_1 g-color-black--hover g-bg-primary--hover g-font-weight-600 text-uppercase g-rounded-50 g-px-30 g-py-13" href="#!" data-target="#content">Get Started</a>
      </div>
    </section>
    <!-- End Promo Block -->

    <!-- About Us -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">About Our Company</h2>
          </div>
          <h3>Welcome to <span class="g-color-primary">Steiner Greves</span></h3>
          <p class="lead text-justify">Our continued <strong>success</strong> is dependent on an understanding of all our clients. Our <strong>strategy</strong> is an in-depth discovery process, allowing us to best understand your values, <strong>goals</strong> and concerns. </p>
        </header>

        <div class="row">
          <div class="col-lg-6 align-self-center">
            <img class="img-fluid u-block-hover__main--zoom-v1" src="img/financial.jpg" alt="Image description">
          </div>

          <div class="col-lg-6 align-self-center g-pl-30--lg g-mb-50 g-mb-0--lg">
            <p class="g-mb-15"><strong>In <span class="g-color-primary">Steiner Greves</span></strong></p>
            <p class="g-mb-40 text-justify">We recognize that your financial future represents a significant emotional investment, but we also know that it is critical to manage that future with logic and process rather than emotions alone. The <span class="g-color-primary">Steiner Greves</span> team will create a detailed road map tailored to your individual situation, supported by a globally diversified investment strategy. No one in the investment industry can predict the outcome of capital markets, what we can assure you is that if you put your faith in us, we will be developing a partnership based on respect and investment expertise.</p>
            <p class="g-mb-15"><strong>Quality and reliability</strong></p>
            <p class="g-mb-5 text-justify">At <span class="g-color-primary">Steiner Greves</span> we promise to always provide unbiased and astute advice based on rational experience and disciplined practice.</p>
            {{-- <div class="row"> --}}
              
                  
              {{-- <div class="col-sm-6">
                <ul class="list-unstyled g-color-gray-dark-v4 g-mb-30 g-mb-0--sm">
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Based on Botostrap 4
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Responsive Bootstrap Template
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Semantic HTML5/CSS3 Codes
                  </li>
                  
                </ul>
              </div>

              <div class="col-sm-6">
                <ul class="list-unstyled g-color-gray-dark-v4">
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Over 2000+ UI Components
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Beautiful Eye Catching Demos
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Over 30+ Thematic Examples
                  </li>
                  
                </ul>
              </div> --}}
            {{-- </div> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us -->

    <!-- Icon Blocks -->
    <div class="row no-gutters g-brd-bottom--lg g-brd-gray-light-v4 mt-5">
      <div class="row text-center">
        <div class="col-md-4 g-mb-30">
          <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after" href="javascript:;" data-fancybox="lightbox-gallery-13-1-hidden" data-src="img/service/service-1.jpg" data-caption="Lightbox Gallery">
            <img class="img-fluid u-block-hover__main--zoom-v1" src="img/service/service-1.jpg" alt="Image Description">
            <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Business Consulting </strong>
          </a>
          <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-2-hidden" data-src="img/service/business-consultant.jpg" data-caption="Lightbox Gallery">
        </div>
        <div class="col-md-4 g-mb-30">
          <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after" href="javascript:;" data-fancybox="lightbox-gallery-13-2-hidden" data-src="img/service/service-2.jpg" data-caption="Lightbox Gallery">
            <img class="img-fluid u-block-hover__main--zoom-v1" src="img/service/service-2.jpg" alt="Image Description">
            <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Consultancy </strong>
          </a>
        </div>
        <div class="col-md-4 g-mb-30">
          <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after" href="javascript:;" data-fancybox="lightbox-gallery-13-3-hidden" data-src="img/service/service-3.jpg" data-caption="Lightbox Gallery">
            <img class="img-fluid u-block-hover__main--zoom-v1" src="img/service/service-3.jpg" alt="Image Description">
            <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Sales & Trade </strong>
          </a>
        </div>
        <div class="col-md-4 g-mb-30">
          <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after" href="javascript:;" data-fancybox="lightbox-gallery-13-4-hidden" data-src="img/service/service-4.jpg" data-caption="Lightbox Gallery">
            <img class="img-fluid u-block-hover__main--zoom-v1" src="img/service/service-4.jpg" alt="Image Description">
            <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Audit & Assurance </strong>
          </a>
        </div>
        <div class="col-md-4 g-mb-30">
          <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after" href="javascript:;" data-fancybox="lightbox-gallery-13-5-hidden" data-src="img/service/service-5.jpg" data-caption="Lightbox Gallery">
            <img class="img-fluid u-block-hover__main--zoom-v1" src="img/service/service-5.jpg" alt="Image Description">
            <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> investment planning </strong>
          </a>
        </div>
        <div class="col-md-4 g-mb-30">
          <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after" href="javascript:;" data-fancybox="lightbox-gallery-13-6-hidden" data-src="img/service/service-6.jpg" data-caption="Lightbox Gallery">
            <img class="img-fluid u-block-hover__main--zoom-v1" src="img/service/service-6.jpg" alt="Image Description">
            <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> financial analysis </strong>
          </a>
        </div>
      </div>
    </div>
    <!-- End Icon Blocks -->
    <!-- Our Vision -->
    <section class="g-flex-centered g-py-100 g-bg-darkgray-radialgradient-circle g-color-white-opacity-0_7g-mt-60">
      <div class="container">
          <div class="row">
          <div class="col-md-6 w-100">
          <header class="text-center g-width-60x--md mx-auto g-mb-60 g-mt-60">
            <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
              <h2 class="h3 u-heading-v2__title g-color-white text-uppercase g-font-weight-600">Our Focus</h2>
            </div>
            <h3 class="g-color-white">In <span class="g-color-primary">Steiner Greves</span></h3>
            <p class="lead text-center g-color-white">Our objective and discipline further reaches to the way we manage our business</p>
          </header>
          </div>
          <div class="col-md-6 w-100">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
                  <img src="img/baxter_and_grant_ask_about_no_fees.jpg" class="d-block w-100" alt="" style="max-height: 400px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/baxter_and_grant_free_caring_advice.jpg" class="d-block w-100" alt="..." style="max-height: 400px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/baxter_and_grant_free_advice.png" class="d-block w-100" alt="..." style="max-height: 400px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/baxter_and_grant_independant.jpg" class="d-block w-100" alt="..." style="max-height: 400px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/baxter_and_grant_no_hidden_fees.jpg" class="d-block w-100" alt="..." style="max-height: 400px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/baxter_and_grant_managed_accounts.jpg" class="d-block w-100" alt="..." style="max-height: 400px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/baxter_and_grant_time_is_money.png" class="d-block w-100" alt="..." style="max-height: 400px;">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Vision -->
    <div class="consult_policy_inner consult_policy_area ">
        <i class="fa fa-line-chart g-color-white pb-4" style="font-size: 46px;"></i>
        <h3 class="g-color-primary pb-4">Steiner Greves</h3>
        <p class="g-color-white">Our objective and discipline further reaches to the way we manage our business:<br>

            We pride ourself on giving you the best advice and act on behalf in a timely fashion, putting your best interests above all else.<br>
            We ensure independent oversight of your assets by holding all client accounts at third-party custodians.<br>
            Our fees are based on assets under management; hence, our interests are aligned with yours.<br>
            The heart of what we do depends on helping our clients achieve their goals and obtain the peace of mind that a successful financial plan provides.<br></p>
        
    </div>
    <!-- Our Pricing -->
    <section class="g-bg-secondary g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">Our Pricing</h2>
          </div>
          <p class="lead">Unify <strong>creative</strong> technology company providing key digital services. Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>
        </header>

        <div class="row align-items-lg-center">
          <div class="col-lg-8 col-md-7">
            <!-- Row -->
            <div class="row g-mr-20--md g-mb-30--lg">
              <div class="col-lg-6 g-mb-40">
                <i class="icon-finance-257 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">Best Index Funds</h4>
                <p class="mb-0">Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem.</p>
              </div>

              <div class="col-lg-6 g-mb-40">
                <i class="icon-finance-223 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">24 Hours Support</h4>
                <p class="mb-0">Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet.</p>
              </div>
            </div>
            <!-- End Row -->

            <!-- Row -->
            <div class="row g-mr-20--md">
              <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                <i class="icon-finance-035 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">Instant Results</h4>
                <p class="mb-0">Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem.</p>
              </div>

              <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                <i class="icon-finance-114 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">Guaranteed Income</h4>
                <p class="mb-0">Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet.</p>
              </div>
            </div>
            <!-- End Row -->
          </div>

          <div class="col-lg-4 col-md-5">
            <!-- Article -->
            <article class="u-shadow-v25 g-bg-white text-center g-rounded-5">
              <!-- Article Header -->
              <header class="g-bg-primary g-pos-rel g-rounded-5 g-px-20 g-py-50">
                <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px" viewBox="0 0 300 70">
                  <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#fff"></path>
                  <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#fff"></path>
                  <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" opacity="0.7" fill="#fff"></path>
                  <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#fff"></path>
                </svg>
                <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                    <span class="g-valign-top g-font-size-default">$</span>49<span class="g-font-size-default">/ month</span>
                  </strong>
                <h3 class="h6 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">Professional</h3>
              </header>
              <!-- End Article Header -->

              <!-- Article Content -->
              <div class="g-px-20 g-pt-20 g-pb-40">
                <ul class="list-unstyled g-mb-40">
                  <li class="g-mb-20">200GB of space</li>
                  <li class="g-mb-20">Unlimited traffic</li>
                  <li class="g-mb-20">Online Support</li>
                  <li class="g-mb-20">24 hour Support</li>
                </ul>
                <a class="btn btn-xl u-btn-primary g-font-size-12 text-uppercase g-rounded-50 g-font-weight-600" href="#!">Order Now</a>
              </div>
              <!-- End Article Content -->
            </article>
            <!-- End Article -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Pricing -->

    <!-- Clients -->
    <section>
      <div class="js-carousel g-brd-top g-brd-bottom g-brd-gray-light-v4" data-autoplay="true" data-slides-show="6" data-responsive='[{
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 2
               }
             }]'>
        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img1.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img2.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img3.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img4.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img5.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img6.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img7.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img8.png" alt="Image description">
        </div>

        <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
          <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img9.png" alt="Image description">
        </div>
      </div>
    </section>
    <!-- End Clients -->

    <!-- Our Services -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-80">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">Our Services</h2>
          </div>
          <p class="lead">Unify <strong>creative</strong> technology company providing key digital services. Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>
        </header>

        <div class="row">
          <div class="col-lg-4 g-mb-60 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="g-brd-around g-brd-gray-light-v4 text-center rounded g-px-30 g-pb-30">
              <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-pull-50x-up rounded-circle">
                  <i class="icon-finance-167 u-line-icon-pro"></i>
                </span>
              <h3 class="h4 g-color-gray-dark-v2 g-mb-10">More Income</h3>
              <p class="g-mb-15">Curabitur ut augue at mi eleifend lobortis. Ut tincidunt lacinia nisi pharetra.</p>
              <a class="g-font-size-12 text-uppercase g-font-weight-600" href="#!">Read More</a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-mb-60 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="g-brd-around g-brd-gray-light-v4 text-center rounded g-px-30 g-pb-30">
              <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-pull-50x-up rounded-circle">
                  <i class="icon-finance-128 u-line-icon-pro"></i>
                </span>
              <h3 class="h4 g-color-gray-dark-v2 g-mb-10">Instant Cash</h3>
              <p class="g-mb-15">Curabitur ut augue at mi eleifend lobortis. Ut tincidunt lacinia nisi pharetra.</p>
              <a class="g-font-size-12 text-uppercase g-font-weight-600" href="#!">Read More</a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4">
            <!-- Icon Blocks -->
            <div class="g-brd-around g-brd-gray-light-v4 text-center rounded g-px-30 g-pb-30">
              <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-pull-50x-up rounded-circle">
                  <i class="icon-finance-218 u-line-icon-pro"></i>
                </span>
              <h3 class="h4 g-color-gray-dark-v2 g-mb-10">Friendly Support</h3>
              <p class="g-mb-15">Curabitur ut augue at mi eleifend lobortis. Ut tincidunt lacinia nisi pharetra.</p>
              <a class="g-font-size-12 text-uppercase g-font-weight-600" href="#!">Read More</a>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Services -->

    <!-- Testimonials -->
    <section class="g-bg-secondary g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">Testimonials</h2>
          </div>
          <p class="lead">Unify <strong>creative</strong> technology company providing key digital services. Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>
        </header>

        <div class="row">
          <div class="col-md-6 g-mb-50 g-mb-0--lg">
            <!-- Testimonials -->
            <blockquote class="lead u-blockquote-v1 rounded g-pl-60 g-pr-30 g-py-30 g-mb-40">Dear Htmlstream team, I just bought the Unify template some weeks ago. The template is really nice and offers quite a large set of options.</blockquote>
            <div class="media">
              <img class="d-flex align-self-center rounded-circle g-width-60 g-height-60 g-brd-around g-brd-3 g-brd-white mr-3" src="../../assets/img-temp/100x100/img4.jpg" alt="Image description">
              <div class="media-body align-self-center">
                <h4 class="h6 g-color-gray-dark-v2 g-font-weight-600 g-mb-0">Alexandra Pottorf</h4>
                <em class="g-color-gray-dark-v4 g-font-style-normal">Web Developer</em>
              </div>
            </div>
            <!-- End Testimonials -->
          </div>

          <div class="col-md-6">
            <!-- Testimonials -->
            <blockquote class="lead u-blockquote-v1 rounded g-pl-60 g-pr-30 g-py-30 g-mb-40">Hi there purchased a couple of days ago and the site looks great, big thanks to the htmlstream guys, they gave me some great help with some fiddly setup issues.</blockquote>
            <div class="media">
              <img class="d-flex align-self-center rounded-circle g-width-60 g-height-60 g-brd-around g-brd-3 g-brd-white mr-3" src="../../assets/img-temp/100x100/img7.jpg" alt="Image description">
              <div class="media-body align-self-center">
                <h4 class="h6 g-color-gray-dark-v2 g-font-weight-600 g-mb-0">Bastien Rojanawisut</h4>
                <em class="g-color-gray-dark-v4 g-font-style-normal">UX/UI Designer</em>
              </div>
            </div>
            <!-- End Testimonials -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials -->

    <!-- Latest News -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">Latest News</h2>
          </div>
          <p class="lead">Unify <strong>creative</strong> technology company providing key digital services. Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>
        </header>

        <div class="row">
          <div class="col-lg-4 g-mb-30 g-mb-0--lg">
            <!-- Article -->
            <article class="u-block-hover">
              <figure class="g-bg-cover g-bg-bluegray-opacity-0_3--after">
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="../../assets/img-temp/500x600/img1.jpg" alt="Image description">
              </figure>

              <div class="media g-pos-abs g-top-20 g-left-20">
                <div class="d-flex mr-3">
                  <img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img7.jpg" alt="Image description">
                </div>
                <div class="media-body align-self-center g-color-white">
                  <p class="mb-0">John Wallmart</p>
                </div>
              </div>

              <span class="u-icon-v3 g-bg-black-opacity-0_5 g-bg-black--hover g-color-white g-rounded-50x g-cursor-pointer g-absolute-centered">
                  <i class="icon-control-play g-left-2"></i>
                </span>

              <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                <span class="g-mr-5">
                    <a class="btn btn-xs u-btn-blue rounded-0" href="#!">Meetup</a>
                  </span>

                <small class="g-color-white">
                    July 02, 2016
                  </small>

                <h3 class="h4 g-mt-10">
                    <a class="g-color-white g-color-white--hover" href="#!">Must be visited places in the USA - Florida Beaches</a>
                  </h3>

                <hr class="g-brd-white-opacity-0_4 g-my-10">

                <ul class="u-list-inline g-font-size-12 g-color-white">
                  <li class="list-inline-item">
                    <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 132
                  </li>
                  <li class="list-inline-item">/</li>
                  <li class="list-inline-item">
                    <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 23
                  </li>
                  <li class="list-inline-item">/</li>
                  <li class="list-inline-item">
                    <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 12
                  </li>
                </ul>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="col-lg-4 g-mb-30 g-mb-0--lg">
            <!-- Article -->
            <article class="u-block-hover">
              <figure class="g-bg-cover g-bg-bluegray-opacity-0_3--after">
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="../../assets/img-temp/500x600/img2.jpg" alt="Image description">
              </figure>

              <div class="media g-pos-abs g-top-20 g-left-20">
                <div class="d-flex mr-3">
                  <img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img6.jpg" alt="Image description">
                </div>
                <div class="media-body align-self-center g-color-white">
                  <p class="mb-0">Alisha Bower</p>
                </div>
              </div>

              <span class="u-icon-v3 g-bg-black-opacity-0_5 g-bg-black--hover g-color-white g-rounded-50x g-cursor-pointer g-absolute-centered">
                  <i class="icon-control-play g-left-2"></i>
                </span>

              <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                <span class="g-mr-5">
                    <a class="btn btn-xs u-btn-yellow rounded-0" href="#!">Consulting</a>
                  </span>

                <small class="g-color-white">
                    July 15, 2016
                  </small>

                <h3 class="h4 g-mt-10">
                    <a class="g-color-white g-color-white--hover" href="#!">Holidays are coming, prepare your gifts to your...</a>
                  </h3>

                <hr class="g-brd-white-opacity-0_4 g-my-10">

                <ul class="u-list-inline g-font-size-12 g-color-white">
                  <li class="list-inline-item">
                    <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 264
                  </li>
                  <li class="list-inline-item">/</li>
                  <li class="list-inline-item">
                    <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 52
                  </li>
                  <li class="list-inline-item">/</li>
                  <li class="list-inline-item">
                    <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 26
                  </li>
                </ul>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="col-lg-4">
            <!-- Article -->
            <article class="u-block-hover">
              <figure class="g-bg-cover g-bg-bluegray-opacity-0_3--after">
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="../../assets/img-temp/500x600/img3.jpg" alt="Image description">
              </figure>

              <div class="media g-pos-abs g-top-20 g-left-20">
                <div class="d-flex mr-3">
                  <img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img5.jpg" alt="Image description">
                </div>
                <div class="media-body align-self-center g-color-white">
                  <p class="mb-0">Linda Reyes</p>
                </div>
              </div>

              <span class="u-icon-v3 g-bg-black-opacity-0_5 g-bg-black--hover g-color-white g-rounded-50x g-cursor-pointer g-absolute-centered">
                  <i class="icon-control-play g-left-2"></i>
                </span>

              <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                <span class="g-mr-5">
                    <a class="btn btn-xs u-btn-red rounded-0" href="#!">Business</a>
                  </span>

                <small class="g-color-white">
                    July 15, 2016
                  </small>

                <h3 class="h4 g-mt-10">
                    <a class="g-color-white g-color-white--hover" href="#!">Best 10 breakfast receipts for your awesome morning day</a>
                  </h3>

                <hr class="g-brd-white-opacity-0_4 g-my-10">

                <ul class="u-list-inline g-font-size-12 g-color-white">
                  <li class="list-inline-item">
                    <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 349
                  </li>
                  <li class="list-inline-item">/</li>
                  <li class="list-inline-item">
                    <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 152
                  </li>
                  <li class="list-inline-item">/</li>
                  <li class="list-inline-item">
                    <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 96
                  </li>
                </ul>
              </div>
            </article>
            <!-- End Article -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Latest News -->

    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(../../assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">We offer best in class service for your needs</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Purchase Now</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

@endsection