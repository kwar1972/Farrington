@extends('layouts.web.app') 
@section('content')
<div class="container-fluid my-5 g-pt-120">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
            <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
              <h2 class="h3 u-heading-v2__title  g-color-black text-uppercase g-font-weight-600">Accounts Types</h2>
            </div>
        </header>
        <br>
        <div class="snip1214">
                <div class="plan">
                  <br><br>
                  <div class="plan-cost" style="
              margin-bottom: 20px;
          "><span class="plan-price"></span><span class="plan-type"></span></div>
                  <ul class="plan-features">
                    <li><i class="ion-checkmark"> </i>Minimum Deposit</li>
                    <li><i class="ion-checkmark"> </i>Minimum Lot Size</li>
                    <li><i class="ion-checkmark"> </i>Spreads</li>
                    <li><i class="ion-checkmark"> </i>Trading Platforms</li>
                    <li><i class="ion-checkmark"> </i>Daily Analysis</li>
                    <li><i class="ion-checkmark"> </i>Account Manager</li>
                    <li><i class="ion-checkmark"> </i>Mobile Trading</li>
                    <li><i class="ion-checkmark"> </i>24 Hour Support</li>
                     <li><i class="ion-checkmark"> </i>Free Bank Wire</li>
                  </ul>
                  <div class="select"><a href="#"></a></div>
                </div>
                <div class="plan">
                  <h3 class="plan-title">
                    BEGINNER
                  </h3>
                   <!--<div class="plan-cost"><span class="plan-price">Register</span></div> -->
                  <ul class="plan-features">
                    <li><i class="ion-checkmark"> </i>250 USD</li>
                    <li><i class="ion-checkmark"> </i>0.1</li>
                    <li><i class="ion-checkmark"> </i>Floating</li>
                    <li><i class="ion-checkmark"> </i>Meta Trader 4</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>No</li>
                  </ul>
                 <!--  <div class="plan-select"><a href="">Select</a></div>-->
                </div>
                <div class="plan featured">
                  <h3 class="plan-title">
                    SILVER
                  </h3>
                  <!-- <div class="plan-cost"><span class="plan-price">Register</span></div>-->
                  <ul class="plan-features">
                    <li><i class="ion-checkmark"> </i>5,000 USD</li>
                    <li><i class="ion-checkmark"> </i>0.1</li>
                    <li><i class="ion-checkmark"> </i>Floating</li>
                    <li><i class="ion-checkmark"> </i>Meta Trader 4</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>No</li>
                  </ul>
                  <!-- <div class="plan-select"><a href="">Select</a></div>-->
                </div>
                    <div class="plan">
                      <h3 class="plan-title">
                        GOLD
                      </h3>
                      <!-- <div class="plan-cost"><span class="plan-price">Register</span></div>-->
                      <ul class="plan-features">
                        <li><i class="ion-checkmark"> </i>20,000 USD</li>
                    <li><i class="ion-checkmark"> </i>0.1</li>
                    <li><i class="ion-checkmark"> </i>Fixed</li>
                    <li><i class="ion-checkmark"> </i>Meta Trader 4</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                      </ul>
                      <!--  <div class="plan-select"><a href="">Select</a></div>-->
                    </div>
                    <div class="plan">
                      <h3 class="plan-title">
                        PLATINUM
                      </h3>
                     
                      <ul class="plan-features">
                        <li><i class="ion-checkmark"> </i>100,000 USD</li>
                    <li><i class="ion-checkmark"> </i>0.1</li>
                    <li><i class="ion-checkmark"> </i>Fixed</li>
                    <li><i class="ion-checkmark"> </i>Meta Trader 4</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                    <li><i class="ion-checkmark"> </i>Yes</li>
                      </ul>
                     
                    </div>
                  </div>
{{-- <div class="row no-gutters align-items-center">
        <div class="col-lg col-md-4 col-sm-6 g-mb-30">
          <!-- Article --> 
          <article class="h-100 g-pos-rel g-bg-gray-light-v5 g-bg-primary-opacity-0_8--hover g-brd-right--sm g-brd-gray-light-v4 g-brd-transparent--hover g-color-black g-transform-scale-1_05--hover g-transition-0_3 g-pt-40 g-px-20 g-pb-105 price">
            <!-- Article Title -->
            <h4 class="g-font-size-20 g-font-weight-700 g-mb-25 g-color-primary change">BEGINNER</h4>
            <!-- End Article Title -->
            <strong class="d-block g-font-size-32 g-line-height-0_7 g-mb-25">
              <span class="g-font-size-default">Minimum Deposit</span>
              <span class="g-font-size-default g-font-weight-600 g-color-primary change"> 250 USD</span>
            </strong>
            <p class="g-mb-20">Facilisis at tortor vel, blandit tristique enim</p>
            <ul class="list-unstyled mb-0">
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Support forum
              </li>
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Unlimited traffic
              </li>
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                1GB of storage space
              </li>
            </ul>
      
            <footer class="g-pos-abs g-bottom-10 g-left-0 g-right-0 g-pa-20">
              <a class="btn u-btn-outline-black g-brd-1 g-rounded-50 g-font-weight-600 g-pa-15-20" href="#!">Order Now</a>
            </footer>
          </article>
          <!-- End Article -->
        </div>
      
        <div class="col-lg col-md-4 col-sm-6 g-mb-30">
          <!-- Article -->
          <article class="h-100 g-pos-rel g-bg-black g-bg-primary-opacity-0_8--hover g-brd-right--md g-brd-gray-light-v4 g-brd-transparent--hover g-color-black g-transform-scale-1_05--hover g-transition-0_3 g-pt-40 g-px-20 g-pb-105 price">
            <!-- Article Title -->
            <h4 class="g-font-size-20 g-font-weight-700 g-mb-25 g-color-primary change">SILVER</h4>
            <!-- End Article Title -->
            <strong class="d-block g-font-size-32 g-line-height-0_7 g-mb-25 g-color-white">
              <span class="g-valign-top g-font-size-default g-color-white">$</span>
              9.90
              <span class="g-font-size-default g-font-weight-400 g-color-primary change">/ month</span>
            </strong>
            <p class="g-mb-20 g-color-white">Facilisis at tortor vel, blandit tristique enim</p>
            <ul class="list-unstyled mb-0">
              <li class="g-mb-5 g-color-white">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Support forum
              </li>
              <li class="g-mb-5 g-color-white">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Unlimited traffic
              </li>
              <li class="g-mb-5 g-color-white">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                4GB of storage space
              </li>
            </ul>
      
            <footer class="g-pos-abs g-bottom-10 g-left-0 g-right-0 g-pa-20">
              <a class="btn u-btn-outline-primary u-btn-outline-black--hover g-brd-1 g-rounded-50 g-font-weight-600 g-pa-15-20 changeb" href="#!">Order Now</a>
            </footer>
          </article>
          <!-- End Article -->
        </div>
      
        <div class="col-lg col-md-4 col-sm-6 g-mb-30">
          <!-- Article -->
          <article class="h-100 g-pos-rel g-bg-gray-light-v5 g-bg-primary-opacity-0_8--hover g-brd-right--sm g-brd-gray-light-v4 g-brd-right-0--md g-brd-right-1--lg g-brd-transparent--hover g-color-black g-transform-scale-1_05--hover g-transition-0_3 g-pt-40 g-px-20 g-pb-105 price">
            <!-- Article Title -->
            <h4 class="g-font-size-20 g-font-weight-700 g-mb-25 g-color-primary change">GOLD</h4>
            <!-- End Article Title -->
            <strong class="d-block g-font-size-32 g-line-height-0_7 g-mb-25">
              <span class="g-valign-top g-font-size-default">$</span>
              14.90
              <span class="g-font-size-default g-font-weight-400 g-color-primary change">/ month</span>
            </strong>
            <p class="g-mb-20">Facilisis at tortor vel, blandit tristique enim</p>
            <ul class="list-unstyled mb-0">
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Support forum
              </li>
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Unlimited traffic
              </li>
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                12GB of storage space
              </li>
            </ul>
      
            <footer class="g-pos-abs g-bottom-10 g-left-0 g-right-0 g-pa-20">
              <a class="btn u-btn-outline-black g-brd-1 g-rounded-50 g-font-weight-600 g-pa-15-20" href="#!">Order Now</a>
            </footer>
          </article>
          <!-- End Article -->
        </div>
      
        <div class="col-lg col-md-4 col-sm-6 g-mb-30">
          <!-- Article -->
          <article class="h-100 g-pos-rel g-bg-gray-light-v5 g-bg-primary-opacity-0_8--hover g-brd-right--md g-brd-gray-light-v4 g-brd-transparent--hover g-color-black g-transform-scale-1_05--hover g-transition-0_3 g-pt-40 g-px-20 g-pb-105 price">
            <!-- Article Title -->
            <h4 class="g-font-size-20 g-font-weight-700 g-mb-25 g-color-primary change">PLATINUM</h4>
            <!-- End Article Title -->
            <strong class="d-block g-font-size-32 g-line-height-0_7 g-mb-25">
              <span class="g-valign-top g-font-size-default">$</span>
              19.90
              <span class="g-font-size-default g-font-weight-400 g-color-primary change">/ month</span>
            </strong>
            <p class="g-mb-20">Facilisis at tortor vel, blandit tristique enim</p>
            <ul class="list-unstyled mb-0">
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Support forum
              </li>
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                Unlimited traffic
              </li>
              <li class="g-mb-5">
                <i class="fa fa-check-circle g-mr-5 g-color-primary change"></i>
                32GB of storage space
              </li>
            </ul>
      
            <footer class="g-pos-abs g-bottom-10 g-left-0 g-right-0 g-pa-20">
              <a class="btn u-btn-outline-black g-brd-1 g-rounded-50 g-font-weight-600 g-pa-15-20" href="#!">Order Now</a>
            </footer>
          </article>
          <!-- End Article -->
        </div>
      </div> --}}
</div>
@endsection
