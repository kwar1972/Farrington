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
<div class="container">
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
</div>
    <!-- End Icon Blocks -->
    <!-- Our Banner 1 -->
        <div class="consult_policy_inner consult_policy_area2">
          <div class="helpline_inner">
            <div class="media">
                <div class="media-body">
                    <h4 class="g-color-primary">Need consultation?</h4>
                    <h4 class="g-color-white">INVESTMENTS YOU CAN TRUST</h4>
                    <p class="g-color-white"><span class="g-color-primary">Steiner Greves</span> offer the best returns on all investments</p>
                    <div class="contact_d">
                        <a href="tel:+43720775910">+437 856 2958</a> <span class="g-color-white"> | </span>
                        <a href="mailto:support@baxtergrant.com?subject= Contact from from website">support@steinergreves.com</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
  <!--End Banner 1 -->
    <!-- Gallery Our FOCUS -->
    <section class="g-flex-centered g-py-50 g-bg-black-opacity-0_9 g-color-white-opacity-0_7">
      <div class="container-fluid">
          <div class="row">
          <div class="col-md-12 w-100">
          <header class="text-center g-width-60x--md mx-auto g-mb-60">
            <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
              <h2 class="h3 u-heading-v2__title g-color-white text-uppercase g-font-weight-600">Our Focus</h2>
            </div>
            <h3 class="g-color-white">In <span class="g-color-primary">Steiner Greves</span></h3>
            <p class="lead text-center g-color-white">Our objective and discipline further reaches to the way we manage our business</p>
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
                              <div class=" g-brd-primary g-mb-20">
                                <h4 class="h4 g-color-primary text-uppercase g-font-weight-600 g-pt-60">No Fees</h4>
                              </div>
                              <p class="lead text-center g-color-white">There are no fees to open or maintain your account and there are no fees to transfer investments. Please ask one our advisors for information about fees.</p>
                            </header>
                      </div>
                      <div class="col-sm-7 ">
                          <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_ask_about_no_fees.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
                            <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_ask_about_no_fees.jpg" alt="Image Description">
                          </a>
                      
                      </div>
                      </div>
                    </div>
                    <div class="js-slide">
                        <div class="row">
                            <div class="col-sm-5 ">
                                <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                                    <div class=" g-brd-primary g-mb-20">
                                      <h4 class="h4 g-color-primary text-uppercase g-font-weight-600 g-pt-60">Caring is helping</h4>
                                    </div>
                                    <p class="lead text-center g-color-white">The heart of what we do depends on helping our clients achieve their goals and obtain the peace of mind that a successful financial plan provides.</p>
                                  </header>
                                </div>
                                <div class="col-sm-7 ">
                        <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_free_caring_advice.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
                        <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_free_caring_advice.jpg" alt="Image Description">
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
                                  <p class="lead text-center g-color-white">We pride ourself on giving you the best advice and act on behalf in a timely fashion, putting your best interests above all else.</p>
                                </header>
                              </div>
                              <div class="col-sm-7 ">
                      <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_free_advice.png" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
                      <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_free_advice.png" alt="Image Description">
                    </a>
                  </div>
                  </div>
                </div>
                <div class="js-slide">
                  <div class="row">
                      <div class="col-sm-5 ">
                          <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                              <div class="g-brd-primary g-mb-20">
                                <h4 class="h4  g-color-primary text-uppercase g-font-weight-600 g-pt-60">Oversight</h4>
                              </div>
                              <p class="lead text-center g-color-white">We ensure independent oversight of your assets by holding all client accounts at third-party custodians.</p>
                            </header>
                          </div>
                          <div class="col-sm-7">
                  <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_independant.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
                  <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_independant.jpg" alt="Image Description">
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
                              <p class="lead text-center g-color-white">Our fees are based on assets under management; hence, our interests are aligned with yours.</p>
                            </header>
                          </div>
                          <div class="col-sm-7 ">
                  <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_no_hidden_fees.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
                  <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_no_hidden_fees.jpg" alt="Image Description">
                </a>
              </div>
              </div>
            </div>
            <div class="js-slide">
              <div class="row">
                  <div class="col-sm-5 ">
                      <header class="text-center g-width-60x--md mx-auto g-mb-60 mt-5">
                          <div class="g-brd-primary g-mb-20">
                            <h4 class="h4  g-color-primary text-uppercase g-font-weight-600 g-pt-60">Management</h4>
                          </div>
                          <p class="lead text-center g-color-white">We will manage your investments for you, with 24 hour assistance.</p>
                        </header>
                      </div>
                      <div class="col-sm-7 ">
              <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_managed_accounts.jpg" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
              <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_managed_accounts.jpg" alt="Image Description">
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
                      <p class="lead text-center g-color-white">Only takes minutes to open an account with <span class="g-color-primary">Steiner Greves</span>. Once your account is set up, you will immediately have full access to all our investment research.</p>
                    </header>
                  </div>
                  <div class="col-sm-7 ">
          <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--07-1" data-src="/img/baxter_and_grant_time_is_money.png" data-caption="Lightbox Gallery" data-animate-in="bounceInDown" data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true">
          <img class="img-fluid g-rounded-6" src="/img/baxter_and_grant_time_is_money.png" alt="Image Description">
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
        <i class="fa fa-line-chart g-color-white pb-4" style="font-size: 46px;"></i>
        <h3 class="g-color-primary pb-4">Steiner Greves</h3>
        <p class="g-color-white">Our objective and discipline further reaches to the way we manage our business:<br>

            We pride ourself on giving you the best advice and act on behalf in a timely fashion, putting your best interests above all else.<br>
            We ensure independent oversight of your assets by holding all client accounts at third-party custodians.<br>
            Our fees are based on assets under management; hence, our interests are aligned with yours.<br>
            The heart of what we do depends on helping our clients achieve their goals and obtain the peace of mind that a successful financial plan provides.<br></p>
        
    </div>
    <!--End Our Focus -->
    <!------ Banner FORM ---->
<div class="conteiner-fluid g-bg-primary" style="background-image: url(../../assets/img/bg/pattern5.png);">
    <div class="row">
      <div class="col-sm-6  text-center">
        <h2 class="g-color-block text-uppercase g-pt-20 pb-5">request a free consultation</h2>
          <form class="" action="#" method="post" id="contactForm" >
            <div class="row pl-3 pr-3">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </div>
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="row pl-3 pr-3">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
            </div>
          </div>
            <div class="form-group col-md-12">
                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" value="submit" class="btn submit_btn btn-secondary btn-xl form-control g-color-primary text-uppercase font-weight-bold">submit now</button>
            </div>
        </form>
      </div>
      <div class="col-sm-6">
          <img class="image-responsive" src="img/contact-right.jpg" alt="">
        </div>
    </div>
  </div>
  <!------ END Banner FORM ---->
    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(../../assets/img/bg/pattern5.png);">
      <div class="justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md g-color-black g-font-weight-600">NOT A CLIENT? OPEN A TRADING ACCOUNT TODAY</p>
          <p class="g-color-black">Take advantage of our competitive trading Strategies</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-black text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="#">Register</a>
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="#">Account Types</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

@endsection