@extends('layouts.master') 
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
                <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">
        
          <button type="button" class="close" data-dismiss="alert">×</button>	
        
                <strong>{{ $message }}</strong>
        
        </div>

        @endif


        @if ($message = Session::get('error'))

        <div class="alert alert-danger alert-block">
        
          <button type="button" class="close" data-dismiss="alert">×</button>	
        
                <strong>{{ $message }}</strong>
        
        </div>

        @endif


        @if ($message = Session::get('warning'))

        <div class="alert alert-warning alert-block">
        
          <button type="button" class="close" data-dismiss="alert">×</button>	
        
          <strong>{{ $message }}</strong>
        
        </div>

        @endif


        @if ($message = Session::get('info'))

        <div class="alert alert-info alert-block">
        
          <button type="button" class="close" data-dismiss="alert">×</button>	
        
          <strong>{{ $message }}</strong>
        
        </div>

        @endif


        @if ($errors->any())
                
        <div class="alert alert-danger">
        
          <button type="button" class="close" data-dismiss="alert">×</button>	
        
          Please check the form below for errors
        
        </div>
        
        @endif
        <!-- Modal  Bank Details-->
        <div class="modal fade bs-example-modal-lg" id="modalChart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog  modal-lg">
            <div class="modal-content">
              <div class="modal-header g-bg-grey">
                <h4 id="userTitle" class="modal-title g-color-white" id="myModalLabel">Bank Information</h4>
                <button type="button" class="close pull-right" data-dismiss="modal"><span class="g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <div class="modal-body">
                  <form id="form1" action="">
                  <div class="row mb-4">
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>Bank Name:</b></label>
                      <input type="text" class="form-control" id="bankname" name="bankname" value="">
                    </div>
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>Country:</b></label>
                      <input type="text" class="form-control" id="country2" name="country2" value="">
                    </div>
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>Account ID:</b></label>
                      <input type="text" class="form-control" id="accid" name="accid" value="">
                    </div>
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>Account Number:</b></label>
                      <input type="text" class="form-control" id="account" name="account" value="">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>Account Name:</b></label>
                      <input type="text" class="form-control" id="accname" name="accname" value="">
                    </div>
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>SWIFT/BIC:</b></label>
                      <input type="text" class="form-control" id="swift" name="swift" value="">
                    </div>
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>IBAN:</b></label>
                      <input type="text" class="form-control" id="iban" name="iban" value="">
                    </div>
                    <div class="col-3 f-size-14 mb-0">
                      <label class="mb-1" class="mb-0"><b>Currency:</b></label>
                      <input type="text" class="form-control" id="currency" name="currency" value="">
                    </div>
                  </div>
                </form>
            </div>
            <div id="btnClusterB" class="modal-footer g-bg-grey" id="modal-footerq">
                  
            </div>
          </div>
        </div>
      </div>
        <!-- end of Bank Details modal ------------------------------>
      <!-- TradingView Widget BEGIN -->
        <div class="row mb-2">
          <div class="col-12">
            <!-- TradingView Widget BEGIN -->
{{-- <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Quotes</span></a> by TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
    {
    "symbols": [
      {
        "description": "USD/CAD",
        "proName": "OANDA:USDCAD"
      },
      {
        "description": "EUR/USD",
        "proName": "OANDA:EURUSD"
      },
      {
        "description": "USD/HKD",
        "proName": "OANDA:USDHKD"
      }
    ],
    "colorTheme": "dark",
    "isTransparent": false,
    "locale": "en"
  }
    </script>
  </div> --}}
  <!-- TradingView Widget END -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                    "symbols": [
                      {
                        "title": "EUR/USD",
                        "proName": "FX_IDC:EURUSD"
                      },
                      {
                        "description": "USD/CAD",
                        "proName": "OANDA:USDCAD"
                      },
                      {
                        "description": "USD/HKD",
                        "proName": "FX:USDHKD"
                      }
                    ],
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "es"
                    }
                  </script>
              </div>
          </div>
        </div>
      <!-- TradingView Widget END -->


      @hasanyrole('client')
      <!-- Small boxes (Stat box) -->
      <div class="row mt-4">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
            <h3>{{$trades}} / {{$deposits}}</h3>

              <p>Trades / Deposits</p>
            </div>
            <div class="icon">
              <i class="fas fa-donate"></i>
            </div>
            <a href="/mytrades/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Account Standing</p>
            </div>
            <div class="icon">
              <i class="fas fa-signal"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning" style="min-height: 145px;">
            <div class="inner">
              <div class="row">
                @foreach($tickers as $ticker)
                <div class="col-sm-6">
                   <h5 class="mb-1"><b>{{$ticker->ticker}}</b></h5>
                </div>
                @endforeach
              </div>

              <p>Latest Holdings</p>
            </div>
            <div class="icon">
              <i class="fas fa-hand-holding-usd"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>0</h3>

              <p>Recommended</p>
            </div>
            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


      @else


       <!-- Small boxes (Stat box) -->
       <div class="row mt-4">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="fas fa-donate"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px"></sup></h3>

              <p>Total Trades (usd)</p>
            </div>
            <div class="icon">
              <i class="fas fa-signal"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
            <h3>0</h3>

              <p>Total Trades</p>
            </div>
            <div class="icon">
              <i class="fas fa-hand-holding-usd"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>0</h3>

              <p>Banned Users</p>
            </div>
            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      @endhasanyrole
      <!-- Main row -->
      <div class="row pt-4">

      </div>
      <div class="row">
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">
                <div class="card g-bg-navy">
                    <div class="card-header d-flex p-0">
                      <h3 class="card-title p-3 g-color-white">
                        <i class="fa fa-chart-line mr-1 g-color-white"></i> My Stocks Performance
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content p-0">
                        <!-- TradingView Widget BEGIN -->
                        <div id="chart1" class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><p onClick="OpenChartModal()" >Detailed Chart</p></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                              "symbol": "NYSE:BABA",
                              "width": "100%",
                              "height": "100%",
                              "locale": "en",
                              "dateRange": "12m",
                              "colorTheme": "dark",
                              "trendLineColor": "#37a6ef",
                              "underLineColor": "rgba(55, 166, 239, 0.15)",
                              "isTransparent": true,
                              "autosize": true,
                              "largeChartUrl": "http://farrington.local/chartbig"
                            }
                            </script>
                          </div>
                          <!-- TradingView Widget END -->
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </section>
                <!-- /.Left col -->

        </section>
      </div>
      <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
 
@section('javascript')
<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/dist/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/dist/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
@stop