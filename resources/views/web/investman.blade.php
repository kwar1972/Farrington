@extends('layouts.web.app') 
@section('content')
<div class="container-fluid g-pt-120 g-pb-60">
    <header class="text-center g-width-60x--md mx-auto g-mb-60">
      <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
        <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">Investment Management</span></h2>
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
            <p class="text-justify g-pr-40 pt-4"><strong>The approach we take at Steiner Greves when managing money is different to most companies due to our heightened focus on minimizing risk and preserving capital. Although our ultimate goal is to outperform the market over a full market rotation, we strive to do it with considerably less risk.</strong></p>
            <p class="text-justify g-pr-40 pt-4"><strong>The following distinguish us from most investment management companies:</strong></p>
            <div id="accordion-06" class="u-accordion" role="tablist" aria-multiselectable="true">
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                <div id="accordion-06-heading-01" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-01" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="true" aria-controls="accordion-06-body-01">
                      Alternative Strategies
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-06-heading-01" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                         <p>Although most companies invest almost exclusively in stocks and bonds, we utilize numerous different
                          investment managers and recommendations that provide a downside saveguard as well as returns that
                          are less equivalent to the stock and bond market.</p>
                  </div>
                </div>
              </div>
              <!-- End Card -->
            
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                <div id="accordion-06-heading-02" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-02" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-02">
                      Flexibility and Agility
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-02" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                         <p>Although we have all of the depth and reserves of a big company, we try to obtain and utilize
                          considerable flexibility and agility that lets us to take the full benefits of changes in the marketplace.</p>
                  </div>
                </div>
              </div>
              <!-- End Card -->
            
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                <div id="accordion-06-heading-03" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-03" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-03">
                      Custom Tactics
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-03" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <p>We enhance custom tactics designed for each client’s exclusive situation.<br><br>
                      As our client, the benefit you derive from these differences is our ability to develop and manage a
                      custom portfolio intended to generate the desired returns with less risk and larger preservation of
                      capital. All of our investment management services are provided on an even-handed fee-only basis
                      through <span class="g-color-primary">Steiner Greves</span>.</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@include('partials.calltoaction') 
@endsection