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
  <div>
    <table id="tabletrades" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%">
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
          <td class="text-center">AWS</td>
          <td class="text-center">1500</td>
          <td class="text-center">15</td>
          <td class="text-center">18</td>
          <td class="text-center">19</td>
          <td class="text-center">22500</td>
          <td class="text-center">28500</td>
          <td class="text-center">6000</td>
          <td class="text-center">0</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</section>
</div>
</div>
@endsection
 
@section('javascript')
<!-- JSGrid -->

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
<!-- Sparkline -->
<script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
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