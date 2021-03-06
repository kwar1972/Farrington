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
              <h3>150</h3>

              <p>Deposits</p>
            </div>
            <div class="icon">
              <i class="fas fa-donate"></i>
            </div>
            <a href="/mytrades" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="/mytrades" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
            <h3>0</h3>

              <p>Latest Holdings</p>
            </div>
            <div class="icon">
              <i class="fas fa-hand-holding-usd"></i>
            </div>
            <a href="/myholdings" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
        <!-- Left col -->

      </div>
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
{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script> --}}
@stop