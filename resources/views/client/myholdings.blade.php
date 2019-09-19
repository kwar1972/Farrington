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
  
  <div class="row mb-5">
    <div class="col-sm-12">
    <table id="tableholdings" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%">
      <thead class="g-bg-color-darkgrey g-color-white">
        <tr>
          <th class="text-center">Ticker</th>
          <th class="text-center">Amount</th>
          <th class="text-center">Paid Price</th>
          <th class="text-center">Actual Price</th>
          <th class="text-center">Sell Price</th>
          <th class="text-center">Total Paid</th>
          <th class="text-center">Total Position</th>
          <th class="text-center">Total Earned</th>
          <th class="text-center">Total Sold</th>
        </tr>
      </thead>
      <tbody>
        <tr>
       
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  @foreach($tickerdata as $ticker)
  <div class="row">
      <div class="col-lg-6">
        <!-- About Me Box -->
        <div class="card " style="height: 375px;">
            <div class="card-header g-bg-navy g-color-white">
              <h3 class="card-title">{{$ticker['name']}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <strong><i class="fas fa-book mr-1"></i>Stock Exchange / Simbol</strong>

                  <p class="text-muted">
                      {{$ticker['symbol']}}
                  </p>
                
                  <hr>
                
                  <strong><i class="fas fa-dollar-sign mr-1 mb-1"></i>Price variations</strong>
                
                  <p class="g-color-black"><b>Opening Price: </b>{{$ticker['price_open']}} usd.</p>
                  <p><span class="g-color-green-op"><b>Day High: </b></span><span class="g-color-black">{{$ticker['day_high']}} usd.</span></p>
                  <p><span class="g-color-red-op"><b>Day Low: </b></span><span class="g-color-black">{{$ticker['day_low']}} usd.</span></p>
                  <p><span class="text-primary"><b>Close Yesterday: </b></span><span class="g-color-black">{{$ticker['close_yesterday']}} usd.</span></p>
                  
                </div>
                <div class="col-sm-6">
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Company Name</strong>
                  
                    <p class="text-muted">{{$ticker['name']}}</p>
                  
                    <hr>
                    <strong><i class="fab fa-stack-exchange mr-1"></i>Stock Exchange / Simbol</strong>

                    <p class="text-muted">
                        {{$ticker['symbol']}}
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
      <div class="col-lg-6">
                 <!-- solid sales graph -->
                 <div class="card g-bg-navy">
                    <div class="card-header border-0">
                      <h3 class="card-title g-color-white">
                        <i class="fas fa-chart-line mr-1"></i>
                        {{$ticker['symbol']}} - Intraday data (30 Days) - <span class="g-color-red">Coming soon..</span>
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="chart" id="line-chart" style="height: 250px;"></div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-transparent">
                      
                  
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
      </div>
</div>
@endforeach
</section>
</div>
</div>
@endsection
 
@section('javascript')
<!-- JSGrid -->

<!-- jQuery -->
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
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
<script src="/dist/plugins/morris/morris.js"></script>
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