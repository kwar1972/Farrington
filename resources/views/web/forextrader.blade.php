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
        <div class="col-sm-7 g-px-120">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/forex-1.jpg" alt="">
                </div>
                <div class="col-sm-6">
                    <img src="img/forex-2.jpg" alt="">
                </div>
            </div>
            <p class="text-justify g-pr-40 pt-4 text-uppercase"><strong>What is Forex?</strong></p>
            <p class="text-justify g-pr-40">Forex, also known as foreign exchange, FX or currency trading, is a decentralized global market where all the world's currencies trade. The forex market is the largest, most liquid market in the world with an average daily trading volume exceeding $5 trillion. All the world's combined stock markets don't even come close to this. But what does that mean to you? Take a closer look at forex trading and you may find some exciting trading opportunities unavailable with other investments.</p>

            <p class="text-justify g-pr-40 pt-2 text-uppercase"><strong>FOREX TRANSACTION: IT'S ALL IN THE EXCHANGE</strong></p>
            <p class="text-justify g-pr-40">If you've ever traveled overseas, you've made a forex transaction. Take a trip to France and you convert your pounds into euros. When you do this, the forex exchange rate between the two currencies based on supply and demand determines how many euros you get for your pounds. And the exchange rate fluctuates continuously.</p>
                    
            <p class="text-justify g-pr-40 pt-2">A single pound on Monday could get you 1.19 euros. On Tuesday, 1.20 euros. This tiny change may not seem like a big deal. But think of it on a bigger scale. A large international company may need to pay overseas employees. Imagine what that could do to the bottom line if, like in the example above, simply exchanging one currency for another costs you more depending on when you do it? These few pennies add up quickly. In both cases, you as a traveler or a business owner may want to hold your money until the forex exchange rate is more favorable.</p>
            
            <p class="text-justify g-pr-40 pt-2 text-uppercase"><strong>IN FOREX: WHAT'S YOUR OPINION?</strong></p>
            <p class="text-justify g-pr-40 pt-2">Just like stocks, you can trade currency based on what you think its value is (or where it's headed). But the big difference with forex is that you can trade up or down just as easily. If you think a currency will increase in value, you can buy it. If you think it will decrease, you can sell it. With a market this large, finding a buyer when you're selling and a seller when you're buying is much easier than in other markets. Maybe you hear on the news that China is devaluing its currency to draw more foreign business into its country. If you think that trend will continue, you could make a forex trade by selling the Chinese currency against another currency, say, the U.S dollar. The more the Chinese currency devalues against the U.S dollar, the higher your profits. If the Chinese currency increases in value while you have your sell position open, then your losses increase and you want to get out of the trade.</p>
        </div>
        <div class="col-sm-5 g-pr-40">
            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https:/s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
    {
    "colorTheme": "dark",
    "dateRange": "12m",
    "showChart": true,
    "locale": "en",
    "largeChartUrl": "",
    "isTransparent": false,
    "width": "400",
    "height": "660",
    "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
    "plotLineColorFalling": "rgba(33, 150, 243, 1)",
    "gridLineColor": "rgba(233, 233, 234, 1)",
    "scaleFontColor": "rgba(120, 123, 134, 1)",
    "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
    "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
    "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
    "tabs": [
      {
        "title": "Indices",
        "symbols": [
          {
            "s": "INDEX:NKY",
            "d": "Nikkei 225"
          },
          {
            "s": "OANDA:UK100GBP",
            "d": "FTSE 100"
          },
          {
            "s": "TSX:ABX",
            "d": "Barrick Gold Corp"
          },
          {
            "s": "NASDAQ:GWPH",
            "d": "GW Pharmaceuticals"
          }
        ],
        "originalTitle": "Indices"
      },
      {
        "title": "Commodities",
        "symbols": [
          {
            "s": "CME_MINI:ES1!",
            "d": "E-Mini S&P"
          },
          {
            "s": "CME:E61!",
            "d": "Euro"
          },
          {
            "s": "COMEX:GC1!",
            "d": "Gold"
          },
          {
            "s": "NYMEX:CL1!",
            "d": "Crude Oil"
          },
          {
            "s": "NYMEX:NG1!",
            "d": "Natural Gas"
          },
          {
            "s": "CBOT:ZC1!",
            "d": "Corn"
          }
        ],
        "originalTitle": "Commodities"
      },
      {
        "title": "Bonds",
        "symbols": [
          {
            "s": "CME:GE1!",
            "d": "Eurodollar"
          },
          {
            "s": "CBOT:ZB1!",
            "d": "T-Bond"
          },
          {
            "s": "CBOT:UD1!",
            "d": "Ultra T-Bond"
          },
          {
            "s": "EUREX:GG1!",
            "d": "Euro Bund"
          },
          {
            "s": "EUREX:II1!",
            "d": "Euro BTP"
          },
          {
            "s": "EUREX:HR1!",
            "d": "Euro BOBL"
          }
        ],
        "originalTitle": "Bonds"
      },
      {
        "title": "Forex",
        "symbols": [
          {
            "s": "FX:EURUSD"
          },
          {
            "s": "FX:GBPUSD"
          },
          {
            "s": "FX:USDJPY"
          },
          {
            "s": "FX:USDCHF"
          },
          {
            "s": "FX:AUDUSD"
          },
          {
            "s": "FX:USDCAD"
          }
        ],
        "originalTitle": "Forex"
      }
    ]
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
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