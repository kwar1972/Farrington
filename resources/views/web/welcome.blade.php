@extends('layouts.web.app') 
@section('content')
    <!-- Promo Block -->
    <section class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-min-height-100vh g-flex-centered g-py-100" style="background-image: url(/img/header1.jpg);">
      <div class="container g-color-white text-center g-z-index-1">
        <div class="mb-5">
          <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase g-mb-30">
            <img class="pb-3" src="img/logo-small.png" alt="Steiner Greves"  style="max-width: 70px;">  
              <span class="u-text-animation u-text-animation--typing"></span>
            </h2>
          <p class="g-font-size-24 g-color-primary g-font-weight-600">Investing in your future</p>
        </div>

        <a class=" btn u-btn-outline-white g-color-white g-bg-white-opacity-0_1 g-color-black--hover g-bg-primary--hover g-font-weight-600 text-uppercase g-rounded-50 g-px-30 g-py-13" href="{{ route('register') }}">Get Started</a>
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
          <p class="lead text-justify">We owe our continued success to our team here at <span class="g-color-primary">Steiner Greves</span> and the understanding we have of our clients. Our ongoing strategy is to work side by side with both team and clients, to best understand their values, goals.</p>
        </header>

        <div class="row">
          <div class="col-lg-6 align-self-center">
            <img class="img-fluid" src="img/financial.jpg" alt="Image description">
          </div>

          <div class="col-lg-6 align-self-center g-pl-30--lg g-mb-50 g-mb-0--lg">
            <p class="g-mb-15 g-color-primary"><strong>At Steiner Greves</strong></p>
            <p class="g-mb-40 text-justify">We recognize that your financial future represents a significant emotional investment, but we also know that it is critical to manage that future with logic and process rather than emotions alone. The <span class="g-color-primary">Steiner Greves</span> team will create a detailed road map tailored to your individual situation, supported by a globally diversified investment strategy. No one in the investment industry can predict the outcome of capital markets, what we can assure you is that if you put your faith in us, we will be developing a partnership based on respect and investment expertise.</p>
            <p class="g-mb-15 g-color-primary"><strong>Quality and reliability</strong></p>
            <p class="g-mb-5 text-justify">At <span class="g-color-primary">Steiner Greves</span> we promise to always provide unbiased and astute advice based on rational experience and disciplined practice.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us -->
<div class="container" style="height:1000px;">
    <!-- Icon Blocks -->
      <div class="row text-center" style="height:500px;">
        <div class="col-md-4 g-mb-30">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <a class="d-block u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after">
                    <img class="img-fluid" src="img/service/service-1.jpg" alt="Avatar">
                    <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Business Consulting </strong>
                  </a>
                  </div>
                  <div class="flip-card-back">
                    <p class="mt-5 text-justify px-5">We work around the clock with our clients on strategy, planning and problem solving. To determining which marketing techniques best benefit you.</p>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-4 g-mb-30">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <a class="d-block u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after">
                    <img class="img-fluid" src="img/service/service-2.jpg" alt="Avatar">
                    <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Consultancy </strong>
                  </a>
                  </div>
                  <div class="flip-card-back">
                    <p class="mt-5 text-justify px-5">We strategies helping you overcome challenges, meet strategic goals or offer strategic ideas on how to grow your portfolio successfully and profitably in the face of ever-increasing market pressure and change.</p>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-4 g-mb-30">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <a class="d-block u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after">
                    <img class="img-fluid" src="img/service/service-3.jpg" alt="Avatar">
                    <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Sales & Trading </strong>
                  </a>
                  </div>
                  <div class="flip-card-back">
                    <p class="mt-5 text-justify px-5">This is one of our key functions when investing with Steiner Greves. The term refers to the various activities relating to the buying and selling of securities or other financial instruments. Typically we perform these tasks on behalf of our-self and all our clients.</p>
                  </div>
                </div>
              </div>
        </div>
      </div>
      <div class="row text-center" style="height:400px;">
        <div class="col-md-4 g-mb-30">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <a class="d-block u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after">
                    <img class="img-fluid" src="img/service/service-4.jpg" alt="Avatar">
                    <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> Audit & Assurance </strong>
                  </a>
                  </div>
                  <div class="flip-card-back">
                    <p class="mt-5 text-justify px-5">We approach your audit with a deep understanding of your business, the industry in which you operate, the risks your company faces and the latest regulatory.</p>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-4 g-mb-30">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <a class="d-block u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after">
                    <img class="img-fluid" src="img/service/service-5.jpg" alt="Avatar">
                    <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> investment planning </strong>
                  </a>
                  </div>
                  <div class="flip-card-back">
                    <p class="mt-5 text-justify px-5">Before investing in a company, it's vital to have a clear plan and understanding of exactly why you are investing in a certain company, and how you aim to achieve your goals.</p>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-4 g-mb-30">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <a class="d-block u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after">
                    <img class="img-fluid" src="img/service/service-6.jpg" alt="Avatar">
                    <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10 text-uppercase"> financial analysis </strong>
                  </a>
                  </div>
                  <div class="flip-card-back">
                    <p class="mt-5 text-justify px-5">This involves us using financial data to assess a company's performance and make recommendations on how it can improve your portfolio and benefit you going forward.</p>
                  </div>
                </div>
              </div>
        </div>
      </div>
<!-- End Icon Blocks -->
</div>
    <!-- Our Banner 1 -->
        <div class="consult_policy_inner consult_policy_area2">
          <div class="helpline_inner">
            <div class="media">
                <div class="media-body">
                    <h4 class="g-color-white">Contact <span class="g-color-primary">Steiner Greves</span></h4>
                    <p class="g-color-white">for a No Obligation Consultation</p>
                    <div class="contact_d">
                        <a class="contact-fix" href="tel:+43720775910">+43 720 022054</a> <span class="g-color-white"> | </span>
                        <a class="contact-fix" href="mailto:support@steinergraves.com?subject= Contact from from website">support@steinergreves.com</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
  <!--End Banner 1 -->
    <!-- Gallery Our FOCUS -->
    <section class="g-flex-centered g-py-50 g-bg-white g-color-black-opacity-0_7">
      <div class="container-fluid">
          <div class="row">
          <div class="col-md-12 w-100">
          <header class="text-center g-width-60x--md mx-auto g-mb-60">
            <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
              <h2 class="h3 u-heading-v2__title g-color-black text-uppercase g-font-weight-600">Our Strategy</h2>
            </div>
          </header>
          </div>
          </div>
          <div class="row">
          <div class="col-md-12 w-100">
                  <div class="js-carousel text-center g-pb-30" data-infinite="true" data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-35 g-height-40 g-font-size-18  g-bg-primary g-bg-black--hover g-color-black  g-color-primary--hover g-mt-minus-10" data-arrow-left-classes="fa fa-angle-left g-left-0" data-arrow-right-classes="fa fa-angle-right g-right-0">
                    <div class="js-slide">
                          <div class="row">
                              <div class="col-sm-5 ">
                                  <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                                      <div class="g-brd-primary g-mb-20">
                                        <h4 class="h4  g-color-primary text-uppercase g-font-weight-600 g-pt-60">Management</h4>
                                      </div>
                                      <p class="lead text-center g-color-black">We will manage your investments for you with a personal dedicated accounts manager.</p>
                                    </header>
                                  </div>
                                  <div class="col-sm-7 ">
                          <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_managed_accounts.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
                          <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_managed_accounts.jpg" alt="Image Description" style="max-width: 700px;">
                        </a>
                      </div>
                      </div>
                    </div>
                    
                  <div class="js-slide">
                      <div class="row">
                          <div class="col-sm-5 ">
                              <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                                  <div class="g-brd-primary g-mb-20">
                                    <h4 class="h4  g-color-primary text-uppercase g-font-weight-600 g-pt-60">Pride</h4>
                                  </div>
                                  <p class="lead text-center g-color-black">We pride our self on giving you the best advice and act on your behalf in a timely fashion.</p>
                                </header>
                              </div>
                              <div class="col-sm-7 ">
                      <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_free_advice.png" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
                      <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_free_advice.png" alt="Image Description" style="max-width: 700px;">
                    </a>
                  </div>
                  </div>
                </div>
                
            
            
        <div class="js-slide">
          <div class="row">
              <div class="col-sm-5 ">
                  <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                      <div class="g-brd-primary g-mb-20">
                        <h4 class="h4 g-color-primary text-uppercase g-font-weight-600 g-pt-60">Time is money</h4>
                      </div>
                      <p class="lead text-center g-color-black">Only takes minutes to open an account with <span class="g-color-primary">Steiner Greves</span>. Once your account is set up, you will immediately have full access to all our investment research.</p>
                    </header>
                  </div>
                  <div class="col-sm-7 ">
          <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_time_is_money.png" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
          <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_time_is_money.png" alt="Image Description" style="max-width: 700px;">
        </a>
      </div>
      </div>
    </div>
    <div class="js-slide">
      <div class="row">
          <div class="col-sm-5 ">
              <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                  <div class="g-brd-primary g-mb-20">
                    <h4 class="h4  g-color-primary text-uppercase g-font-weight-600 g-pt-60">Same Idea</h4>
                  </div>
                  <p class="lead text-center g-color-black">Our fees are based on assets under management; hence, our interests are aligned with yours.</p>
                </header>
              </div>
              <div class="col-sm-7 ">
      <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_no_hidden_fees.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
      <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_no_hidden_fees.jpg" alt="Image Description" style="max-width: 700px;">
    </a>
  </div>
  </div>
</div>
    <div class="js-slide">
      <div class="row">
        <div class="col-sm-5 ">
            <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                <div class=" g-brd-primary g-mb-20">
                  <h4 class="h4 g-color-primary text-uppercase g-font-weight-600 g-pt-60">No Fees</h4>
                </div>
                <p class="lead text-center g-color-black">There are no Fees to open or maintain your account, please ask one of our advisors for information about fees.</p>
              </header>
        </div>
        <div class="col-sm-7 ">
            <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_ask_about_no_fees.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
              <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_ask_about_no_fees.jpg" alt="Image Description" style="max-width: 700px;">
            </a>
        
        </div>
        </div>
      </div>
        </div>
      </div>
    </div>
    </section>
    <!-- End Gallery -->
    <!-- Our Focus -->
    <div class="consult_policy_inner consult_policy_area ">
        <h3 class="g-color-primary pb-4">Steiner Greves</h3>
        <p class="g-color-white">Our objective and discipline further reaches to the way we manage our business:<br>

            We pride ourself on giving you the best advice and act on behalf in a timely fashion, putting your best interests above all else.<br>
            We ensure independent oversight of your assets by holding all client accounts at third-party custodians.<br>
            Our fees are based on assets under management; hence, our interests are aligned with yours.<br>
            The heart of what we do depends on helping our clients achieve their goals and obtain the peace of mind that a successful financial plan provides.<br>
        </p>
    </div>
    <!--End Our Focus -->
@include('partials.calltoaction') 
@endsection