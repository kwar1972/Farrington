@extends('layouts.web.app') 
@section('content')
<div class="container-fluid g-pt-120 g-pb-60">
    <header class="text-center g-width-60x--md mx-auto g-mb-60">
      <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
        <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">Frequent Asked <span class="g-color-primary">Questions</span></h2>
      </div>
    </header>
    <div class="row">
      <div class="col-sm-3">
        <div class="h5 g-bg-primary g-color-white text-center u-heading-v2__title py-3">Ask A Question? </div>
        <form action="/faqform" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Surname" aria-describedby="helpId">
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
                      What are the documents needed to verify my account?
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-02" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
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
                <div id="accordion-06-heading-03" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-03" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-03">
                      How can I deposit to my account?
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-03" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <ol>
                      <li>Login to your Client Area and click Deposit Funds</li>
                      <li>Choose a payment method of your choice</li>
                      <li>Enter the amount you wish to deposit</li>
                      <li>Fill and complete deposit forms and proceed accordingly</li>
                    </ol>
                  </div>
                </div>
              </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="card rounded-0 g-bg-gray-light-v3 g-brd-none">
              <div id="accordion-06-heading-04" class="u-accordion__header g-pa-20" role="tab">
                <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                  <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-04" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-04">
                    How much is the minimum deposit?
                    <span class="u-accordion__control-icon g-ml-10">
                      <i class="fa fa-angle-down"></i>
                      <i class="fa fa-angle-up"></i>
                    </span>
                  </a>
                </h5>
              </div>
              <div id="accordion-06-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-04" data-parent="#accordion-06">
                <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                  <p>There is no limit on the minimum or maximum that you can deposit.</p>
                </div>
              </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="card rounded-0 g-bg-gray-light-v4 g-brd-none">
                <div id="accordion-06-heading-05" class="u-accordion__header g-pa-20" role="tab">
                  <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700">
                    <a class="collapsed d-flex justify-content-between g-color-primary g-text-underline--none--hover" href="#accordion-06-body-05" data-toggle="collapse" data-parent="#accordion-06" aria-expanded="false" aria-controls="accordion-06-body-05">
                      What are the factors that I should consider when choosing an asset class?
                      <span class="u-accordion__control-icon g-ml-10">
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                      </span>
                    </a>
                  </h5>
                </div>
                <div id="accordion-06-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-06-heading-05" data-parent="#accordion-06">
                  <div class="u-accordion__body g-color-gray-dark-v5 g-pa-0-20-20 text-justify">
                    <p>Diversification and exposure. The private tech market is quickly becoming a meaningful portion of the suite of asset classes available in today’s financial markets.
                        Assuming you already have a sufficiently diversified portfolio across a range of safe and moderately safe securities, it is certainly worth considering for inclusion in a balanced portfolio.
                        Of course, each investor's situation is different, and suitability is a case-by-case conversation. But for many accredited investors, late-stage private market investments can certainly offer compelling investment opportunities while the companies are in the rapid value creation phase.</p>
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
                    <p>There are no fees or deposits required to open an account with <span class="g-color-primary">Steiner Greves</span>. Creating an account gives you access to your investment details of past and ongoing trades.</p>
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
                      <p>There is risk of loss associated with investing in securities regardless of the method used. New investors need to understand the principles of investing, their own risk tolerance, and their investment goals before venturing into the market.</p>
                      <p>In addition, online investors may want to consider these other risks. High Internet traffic may affect online investors' ability to access their account or transmit their orders.</p>
                      <p>Online investors should be skeptical of stock advice and tips provided in chat rooms or bulletin boards. Investors should do their own research before acting on these tips. Also, for some online investors, there is a temptation to "overtrade" by trading too frequently or impulsively without considering their investment goals or risk tolerance. Overtrading can effect investment performance, raise trading costs, and complicate your tax situation.</p>
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
                      <p>If a customer chooses to borrow funds from a firm, the customer will open a margin account with that firm. The portion of the purchase price that the customer must deposit is called margin and is the customer's initial equity in the account.</p>
                      <p>The loan from the firm is secured by the securities that are purchased by the customer. Customers generally use margin to leverage their investments and increase their purchasing power. At the same time, customers who trade securities on margin incur the potential for higher losses; therefore, customers should make sure they clearly understand this concept before opening a margin account and entering the investing arena.</p>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
          </div>
      </div>
    </div>
</div>
<!-- Call To Action -->
<section class="g-bg-primary g-color-white w-100 g-pa-30" style="background-image: url(../../assets/img/bg/pattern5.png);">
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