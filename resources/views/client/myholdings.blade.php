@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
  <h1 class="m-0 text-dark"><i class="nav-icon fas fa-hand-holding-usd"></i> My Holdings </h1>
  {{-- <button  class="btn btn-sm btn-primary g-color-white-user-i" data-toggle="tooltip" data-placement="right" title="Create User" onclick="openCreateModal()">Add new transaction</button> --}}
</div>
<!-- /.col -->
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="home">Home</a></li>
    <li class="breadcrumb-item"><a href="userman">My Holdings</a></li>
  </ol>
</div>
<!-- /.col -->
</div>

<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<div id="spinner"></div>
<!-- Main content -->
<section class="content">
<div class="container-fluid">
@if(!isset($nodata) || $nodata !== 0)  
  <div class="row mb-5">
    <div class="col-sm-12">
    <table id="tableholdings" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%">
      <thead class="g-bg-color-darkgrey g-color-white">
        <tr>
          <th class="text-center">Ticker</th>
          <th class="text-center">Amount</th>
          <th class="text-center">Paid Price</th>
          <th class="text-center">Sell Price</th>
          <th class="text-center">Total Paid</th>
          <th class="text-center">Total Position</th>
          <th class="text-center">Total Earned</th>
          <th class="text-center">Total Sold</th>
        </tr>
      </thead>
      <tbody>
       
      </tbody>
    </table>
  </div>
  </div>
  @foreach($tickerdata as $ticker)
  <div class="row">
      <div class="col-lg-3">
        <!-- About Me Box -->
        <div class="card " style="height: 735px;">
            <div class="card-header g-bg-navy g-color-white">
              <h3 class="card-title">{{$ticker['name']}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <strong><i class="fas fa-book mr-1"></i>Stock Exchange / Simbol</strong>

                  <p class="text-muted">
                      {{$ticker['symbol']}}
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i>Company Name</strong>
                  
                  <p class="text-muted">{{$ticker['name']}}</p>
                  
                  <hr>
                
                  <strong><i class="fas fa-dollar-sign mr-1 mb-1"></i>Price variations</strong>
                
                  <p class="g-color-black"><b>Opening Price: </b>{{$ticker['price_open']}} usd.</p>
                  <p><span class="g-color-green-op"><b>Day High: </b></span><span class="g-color-black">{{$ticker['day_high']}} usd.</span></p>
                  <p><span class="g-color-red-op"><b>Day Low: </b></span><span class="g-color-black">{{$ticker['day_low']}} usd.</span></p>
                  <p><span class="text-primary"><b>Close Yesterday: </b></span><span class="g-color-black">{{$ticker['close_yesterday']}} usd.</span></p>
                  
                    <hr>
                    <strong><i class="fas fa-dollar-sign mr-1"></i>Stock Exchange / Price</strong>

                    <p class="text-muted">
                        Price:<span class="g-color-red"> {{$ticker['price']}}</span>
                    </p>
                    
                  
                    <hr>
                   
                    <strong><i class="fas fa-search mr-1"></i> Total Shares / Market Capital</strong>
                  
                    <p class="text-muted">
                      <span class="tag tag-danger">{{$ticker['shares']}} / </span>
                      <span class="tag tag-success">{{$ticker['market_cap']}}</span>
  
                    </p>
                  </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>
      <div class="col-lg-9">
                 <!-- solid sales graph -->
                 <div class="card g-bg-navy">
                    <div class="card-header border-0">
                      <h3 class="card-title g-color-white">
                        <i class="fas fa-chart-line mr-1"></i>
                        {{$ticker['symbol']}} - Realtime data
                      </h3>
                    </div>
                    <div class="card-body">
                      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
<div id="tradingview_b2465{{$ticker['symbol']}}"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,
  "symbol": "{{$ticker['stock_exchange_short']}}:{{$ticker['symbol']}}",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "1",
  "locale": "es",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "save_image": false,
  "details": true,
  "container_id": "tradingview_b2465{{$ticker['symbol']}}"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-transparent">
                      
                  
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
{{-- <script>
/* Morris.js Charts */
// Sales chart
function data(data,a,b,c) {
    var ret = [
        { y: '2006', a: 100, b: 90 ,c:50},
        { y: '2007', a: 75,  b: 65 ,c:50},
        { y: '2008', a: 50,  b: 40 ,c:50},
        { y: '2009', a: 75,  b: 65 ,c:50},
        { y: '2010', a: 50,  b: 40 ,c:50},
        { y: '2011', a: 75,  b: 65 ,c:50},
        { y: '2012', a: 100, b: 90 ,c:50}
      ];

      if(a == false)
      {

      for(var i = 0; i < ret.length; i++)
        delete ret[i].a;
      }
      if(b == false)
      {

      for(var i = 0; i < ret.length; i++)
        delete ret[i].b;
      }
      if(c == false)
      {

      for(var i = 0; i < ret.length; i++)
        delete ret[i].c;
      }
       return ret;
}


  var line{{$ticker['symbol']}} = new Morris.Line({
    element          : 'line-chart{{$ticker['symbol']}}',
    resize           : true,
    data             : data(),
    xkey             : 'y',
    ykeys            : ['item1'],
    ykeys            : ['a', 'b','c'],
    labels           : ['High', 'Low','Close'],
    colors           : ['Red',"blue","green"],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    gridTextSize     : 10
  });
  
  line{{$ticker['symbol']}}.redraw()  
</script> --}}
      </div>
</div>
@endforeach
@else
<div class="row">
  <div class="col-sm-12 text-center">
    <h2>NO HOLDINGS TO DISPLAY</h2>
  </div>
</div>
@endif
</div>
</section>
</div>
</div>
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
<!-- Datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('assets/js/myholdings.js') }}"></script>
<!-- Swal -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/swal-forms.js')}}" type="text/javascript"></script>
<!-- Boostrap Toggle -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>
@stop