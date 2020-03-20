@extends('layouts.web.app') 
@section('content')
<div class="container-fluid g-pt-120 g-pb-60">
    <header class="text-center g-width-60x--md mx-auto g-mb-60">
      <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
        <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">Frequently Asked <span class="g-color-primary">Questions</span></h2>
      </div>
    </header>
    <div class="row">
      <div class="col-sm-3">
        <!-- Teal Alert -->
        @if(Session::has('success'))
        <div class="alert alert-dismissible fade show g-bg-teal g-color-white rounded-0" role="alert">
          <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        
          <div class="media">
            <span class="d-flex g-mr-10 g-mt-5">
              <i class="icon-check g-font-size-25"></i>
            </span>
            <span class="media-body align-self-center">
              The form has been successfully sent!
            </span>
          </div>
        </div>
        @endif
        <!-- End Teal Alert -->
        <div class="h5 g-bg-primary g-color-white text-center u-heading-v2__title py-3">Ask A Question? </div>
        <form action="/contactform" method="post">
          @csrf
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-lg btn-primary w-100 g-font-weight-700">SEND MESSAGE</button>
            <img src="img/ssl.png" alt="Steiner SSL" style="max-width: 135px;">
            <p class="pb-2 g-font-weight-600">This page is secured by SSL certificate providing encryption of your registration data.</p>
          </div>
        </form>
      </div>
      <div class="col-sm-9 g-px-40">
          <div id="accordion-06" class="u-accordion" role="tablist" aria-multiselectable="true">
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                <div id="accordion-06-heading-01" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-01" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="true" aria-controls="accordion-06-body-01">
                      How long will it take to process my withdrawal?
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-06-heading-01" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <p class="g-font-weight-700">Withdrawal requests take up to 1 business day to process. The time taken to receive your payment may vary depending on the payment provider involved.</p>
                    <ul>
                      <li class="g-font-weight-700">Credit Card or Debit Card</li>
                        <p>After your withdrawal request has been successfully approved and released from your account, it will take 3 to 5 business days for you to  receive it.</p>
                      <li class="g-font-weight-700">Webmoney / Skrill (Moneybookers) / Neteller (eWallets)</li>
                        <p>After your withdrawal request has been successfully approved and released from your account, it will take 1 to 2 business days for you to receive your funds. </p>
                      <li class="g-font-weight-700">Bank Transfer</li>
                        <p>Bank Transfer usually takes 4 to 7 business days prior to the date of withdrawal request-approval. Delays may occur beyond the Company’s control due to third-party withdrawal payment methods.</p>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- End Card -->
            
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                <div id="accordion-06-heading-02" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-02" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-02">
                        What Documents are needed to verify my Account?
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-02" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <p class="g-font-weight-700">When you agree to come onboard as a preferred client you will receive two documents. The first
                        document is a Stock Purchase Agreement, this requires your signature allowing us to move forward and
                        lock you into the trade at the price given. The second document is a W-8BEN this document is for a
                        Non-US Citizen who are not eligible to pay taxes in the US. This needs to be filled out in full and filed.</p>
                    <p class="g-font-weight-700">To verify your account, upload the following documents or submit it to <span class="g-color-primary">clients@steinergreves.com</span></p>
                    <ol>
                      <li>
                          <span class="g-font-weight-700">Proof of Identity – Personal details (such as serial number, signature, picture, issue date, and expiry date) must be legible from any of the following:</span>
                          <ul>
                            <li>Scanned Copy of Passport</li>
                            <li>National Identity Card</li>
                            <li>Driving License</li>
                          </ul>
                      </li>
                      <li>
                        <span class="g-font-weight-700">Proof of Residence – Document must be under your name, and must show the complete address identical to the address registered to your account. Proof of Residence copies must not be older than 3 months, and must be legible from:</span>
                        <ul>
                          <li>Stamped Bank Statement</li>
                          <li>Credit Card Statement</li>
                          <li>Official Residence</li>
                          <li>Rental Agreement</li>
                          <li>Utility Bill (Electricity, Gas, Water, Phone)</li>
                          <p class="g-color-primary g-font-weight-700">Please take into account that electronic (online) bills or statements are not acceptable. </p>
                        </ul>
                      </li>
                      <li>
                        <span class="g-font-weight-700">Card Copy – If Credit Card or Debit Card was used for depositing, kindly send a copy accordingly:</span>
                        <ul>
                          <span class="g-color-primary">Front copy must show:</span>
                          <li>First 6 digits and last 4 digits only of the card</li>
                          <li>Expiration date of the card</li>
                          <li>Full name on the card</li>
                          <span class="g-color-primary">Back copy must show:</span>
                          <li>Signature</li>
                          <li>CVV must be covered</li>
                          <span class="g-color-primary g-font-weight-700">When sending the documents, please make sure that the formats are only JPG, GIF, DOC, and/or PDF, without password protection.</span>
                        </ul>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <!-- End Card -->
            
            <!-- Card -->
            <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                <div id="accordion-06-heading-05" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-05" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-05">
                        What Factors Should I Consider In My Allocation Plan:
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-05" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <ul>
                      <li>Investment Horizon. In a general, your investments should be matched with your need for the money.</li>
                      <li>Risk Tolerance.</li>
                      <li>Diversification.</li>
                      <li>Costs / Expenses.</li>
                      <li>Investment Vehicles.</li>
                      <li>Rebalancing.</li>
                      <li>Guidance.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- End Card -->
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                <div id="accordion-06-heading-06" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-06" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-06">
                      What is the cost to setup an account and what about service fees?
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-06" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <p>There are no fees or deposits required to open an account with Steiner Greves.
                        The standard commission for full-service brokers are between 1% to 2% of a client's managed assets.</p>
                  </div>
                </div>
              </div>
              <!-- End Card -->
              <!-- Card -->
              <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                  <div id="accordion-06-heading-07" class="u-accordion__header g-pa-20" role="tab">
                    <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                      <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-07" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-07">
                        What are the risks of online trading?
                        <span class="u-accordion__control-icon g-ml-10">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-06-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-07" data-parent="#accordion-06">
                    <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                      <p>There is risk of loss associated with investing in securities regardless of the method used. New
                          investors need to understand the principles of investing, their own risk tolerance, and their investment
                          goals before venturing into the market.</p>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
                <!-- Card -->
                <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                  <div id="accordion-06-heading-08" class="u-accordion__header g-pa-20" role="tab">
                    <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                      <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-08" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-08">
                        What does it mean to "trade on margin"?
                        <span class="u-accordion__control-icon g-ml-10">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-06-body-08" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-08" data-parent="#accordion-06">
                    <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                      <p>Buying on margin is borrowing money from a broker in order to purchase stock. You can think of it as
                          a loan from your brokerage. Margin trading allows you to buy more stock than you'd be able to
                          normally. To trade on margin, you need a margin account.</p>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
                <!-- Card -->
                <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                  <div id="accordion-06-heading-09" class="u-accordion__header g-pa-20" role="tab">
                    <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                      <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-09" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-09">
                        What is Market Growth?
                        <span class="u-accordion__control-icon g-ml-10">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-06-body-09" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-09" data-parent="#accordion-06">
                    <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                      <p>A rise in interest for a particular product or service over a period of time. Market growth can be delayed
                          if buyers do not adopt a high demand or find a product or service practical for their price level.<br><br>
                          For example, a current technology might only be marketable to a limited set of buyers, however if the
                          price of the technology reduces and its benefits in every day life increase, more buyers could strengthen
                          demand. Our expert analyst are continually watching the movement of a stock and can almost
                          determine when a particular product will hit its bottom or hit its high.</p>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
                <!-- Card -->
                <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                  <div id="accordion-06-heading-10" class="u-accordion__header g-pa-20" role="tab">
                    <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                      <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-10" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-10">
                        How do I get the Best Returns from my Investment?
                        <span class="u-accordion__control-icon g-ml-10">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-06-body-10" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-10" data-parent="#accordion-06">
                    <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                      <p>I am sure we all remember when we received that very first pay-check? The first time you could see the
                          difference in what you made and what you took home. There’s a similarity when investing. There is
                          usually a gap in the amount your portfolio earns in investment returns and in what actually lands in
                          your pocket. However the difference between that and your pay-check, is the investment gap is
                          something you can mitigate.<br><br>
                          <span class="g-color-primary">Steiner Greves</span> can help in keeping your investor returns which can be and often are swallowed up by
                          outrageous fees, bad investor behavior (for example terrible market timing or uncompensated risk from
                          poor diversification), and other inefficiencies like a bad tax approach. This is the main reason Steiner
                          Greves exists to give all our clients a more secure effective and more rewarding way to invest.</p>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
                <!-- Card -->
                <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                  <div id="accordion-06-heading-09" class="u-accordion__header g-pa-20" role="tab">
                    <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                      <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-09" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-09">
                        What is a Build and Buy Strategy?
                        <span class="u-accordion__control-icon g-ml-10">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-06-body-09" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-09" data-parent="#accordion-06">
                    <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                      <p>The strategy we used to build the business was to attract higher valuations and focus on helping our
                          portfolio companies gain growth, grow in a short space of time but keeping a sensible and safe attitude
                          – this is achieved through the pursuit of a buy and build strategy.</p>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
                <!-- Card -->
                <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
                  <div id="accordion-06-heading-10" class="u-accordion__header g-pa-20" role="tab">
                    <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                      <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-10" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-10">
                        What is your Investment Experience at Steiner Greves ?
                        <span class="u-accordion__control-icon g-ml-10">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-06-body-10" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-10" data-parent="#accordion-06">
                    <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                      <p>Our team of investors from juniors to executive have a number of years of investment experience
                          between them. Our aim is to ensure all our investors that this combined knowledge is applied in all
                          investment, to assist our portfolio companies and individual clients to build the right portfolio and
                          reach their maximum potential.</p>
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