@extends('layouts.web.app') 
@section('content')
<div class="container-fluid g-pt-120 g-pb-60">
    <header class="text-center g-width-60x--md mx-auto g-mb-60">
      <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
        <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">Forex <span class="g-color-primary">Trader</span></h2>
      </div>
      <p class="lead text-center g-font-size-20 text-uppercase"><span class="g-color-black">Do you want to <span class="g-color-primary g-font-weight-600">trade now ?</span></p>
    </header>
    <div class="row">
        <div class="col-sm-12 g-px-150">
            <div class="row">
                <div class="col-sm-12">
                    <img class="img-fluid" src="img/forex2.jpg" alt="">
                </div>
            </div>
            <header class="text-center g-width-60x--md mx-auto g-mb-20 g-mt-20">
              <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">What is <span class="g-color-primary g-font-weight-600">Forex?</span></h2>
              </div>
            </header>
            <p class="text-justify g-pr-40 g-pb-20">Forex, also referred to as the foreign exchange, FX or currency trading, is a decentralized world market
              where all the world's currencies trade. The forex market is the biggest, most liquid market on the planet
              with an average daily trading volume exceeding $5 trillion. All the world's combined stock markets
              don't even come close to this. What does that mean to you? Have a closer look at forex trading and you
              may find some exciting trading opportunities unavailable with other investments.</p>
            
            <header class="text-center g-width-60x--md mx-auto g-mb-20 g-mt-20">
              <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">FOREX TRANSACTION: <span class="g-color-primary g-font-weight-600">IT'S ALL IN THE EXCHANGE</span></h2>
              </div>
            </header>
            <p class="text-justify g-pr-40">If you've ever traveled overseas, you've made a forex transaction. Take a trip to France and you convert
              your pounds into euros. When you do this, the forex exchange rate between the two currencies based
              on supply and demand determines how many euros you get for your pounds. And the exchange rate
              fluctuates continuously.</p>
                    
            <p class="text-justify g-pr-40 pt-2">A single pound on Monday could get you 1.19 euros. On Tuesday, 1.20 euros. This tiny change may not
              seem like a big deal. But think of it on a bigger scale. A large international company may need to pay
              overseas employees. Imagine what that could do to the bottom line if, like in the example above,
              simply exchanging one currency for another costs you more depending on when you do it? These few
              pennies add up quickly. In both cases, you as a traveler or a business owner may want to hold your
              money until the forex exchange rate is more favorable.</p>
            
            <header class="text-center g-width-60x--md mx-auto g-mb-20 g-mt-20">
              <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">IN FOREX: <span class="g-color-primary g-font-weight-600">WHAT'S YOUR OPINION?</span></h2>
              </div>
            </header>
            <p class="text-justify g-pr-40 pt-2">Just like stocks, you can trade currency based on what you think its value is (or where it's headed). But
              the big difference with forex is that you can trade up or down just as easily. If you think a currency will
              increase in value, you can buy it. If you think it will decrease, you can sell it. With a market this large,
              finding a buyer when you're selling and a seller when you're buying is much easier than in other
              markets. Maybe you hear on the news that China is devaluing its currency to draw more foreign
              business into its country. If you think that trend will continue, you could make a forex trade by selling
              the Chinese currency against another currency, say, the US dollar. The more the Chinese currency
              devalued against the US dollar, the higher your profits. If the Chinese currency increases in value while
              you have your sell position open, then your losses increase and you want to get out of the trade.</p>
        </div>
    </div>
</div>
@include('partials.calltoaction') 
@endsection