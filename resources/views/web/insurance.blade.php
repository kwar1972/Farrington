@extends('layouts.web.app') 
@section('content')
<div class="container-fluid g-pt-120 g-pb-60">
    <header class="text-center g-width-60x--md mx-auto g-mb-60">
      <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
        <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">Insurance & Risk Management</span></h2>
      </div>
    </header>
    <div class="row">
        <div class="col-sm-12 px-20">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="img/commodities.jpg" alt="">
                </div>
                <div class="col-sm-6">
                    <img src="img/company/company-2.jpg" alt="">
                </div>
            </div>
            <p class="text-justify g-pr-40 pt-4"><strong>Given our extensive background and expertise in the insurance marketplace, Steiner Greves is ideally
              positioned to administer expert advice and support, and to implement independent solutions.</strong></p>
            <p class="text-justify g-pr-40 pt-4"><strong>These attributes set us apart from other insurance advisors:</strong></p>
            <div id="accordion-06" class="u-accordion" role="tablist" aria-multiselectable="true">
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                <div id="accordion-06-heading-01" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-01" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="true" aria-controls="accordion-06-body-01">
                      Product Awareness
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-06-heading-01" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                         <p>Our awareness of the products accessible in the marketplace allow us to optimize policies to perform as
                          desired and to exploit niche features.</p>
                  </div>
                </div>
              </div>
              <!-- End Card -->
            
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                <div id="accordion-06-heading-02" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-02" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-02">
                      Objective Analysis
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-02" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                         <p>Our proprietary modeling gives an objective quantitative analysis of an extensive number of policies
                          and policy designs. We then overlay our qualitative analysis to identify the most appropriate solution
                          for a given situation.</p>
                  </div>
                </div>
              </div>
              <!-- End Card -->
            
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                <div id="accordion-06-heading-03" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-03" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-03">
                      Underwriting
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-03" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <p>Our unique process, allows us to obtain the most favorable pricing, which can produce significant cost
                      savings.</p>
                  </div>
                </div>
              </div>
              <!-- End Card -->

               <!-- Card -->
               <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                <div id="accordion-06-heading-03" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-03" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-03">
                      Independence
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-03" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <p>We don't have alliances with any insurance companies or production requirements, which enables us to
                      act in the best interest of our clients by exploring the universe of companies and policies.</p>
                  </div>
                </div>
              </div>
              <!-- End Card -->
          </div>
        </div>
    </div>
</div>
@include('partials.calltoaction') 
@endsection