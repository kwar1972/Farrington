@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Modal form-->
            <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 id="tickerTitle" class="modal-title g-color-white" id="myModalLabel">Ticker Edit</h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                      <div id="tickersubtitle" class="row">
                        <div class="col-12">
                          <p><b>Ticker Information</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Ticker:</b></label>
                          <input type="text" class="form-control" id="ticker" name="ticker" value="">
                        </div>
                        <div class="col-5 f-size-14 mb-0">
                          <label class="mb-1"><b>Description:</b></label>
                          <input type="text" class="form-control" id="description" name="description" value="">
                        </div>
                        <div class="col-2 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Quantity:</b></label>
                          <input type="text" class="form-control" id="quantity" name="quantity" value="">
                        </div>
                        <div class="col-2 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Price:</b></label>
                          <input type="text" class="form-control" id="price" name="price" value="">
                        </div>
                      </div>
                      <div id="tickerStatus" class="row mt-3">
                        <div class="col-5 f-size-14 mb-0">
                          <label><b>Status:</b></label>&nbsp;
                          <input id="active" type="checkbox" checked data-toggle="toggle" data-onstyle="outline-primary" data-offstyle="outline-danger" data-id="" data-on="Enabled" data-loaded="0" data-off="Disabled" data-width="80" data-size="sm">
                          
                        </div>
                        <div class="col-2 f-size-14 mb-0">
                         
                        </div>
                        <div class="col-2 f-size-14 mb-0">
                          
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          
                        </div>
                      </div>
                </div>
                <div id="btnCluster" class="modal-footer g-bg-grey" id="modal-footerq">
                      
                </div>
              </div>
            </div>
          </div>
            <!-- end of View modal ------------------------------>
            
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-money-check-alt"></i> Ticker Manager <button class="btn btn-sm btn-primary g-color-white-user-i" onClick="open_createModal()" data-toggle="tooltip" data-placement="right" title="Create Ticker">Add new ticker</button></h1>
            
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item"><a href="userman">Ticker Manager</a></li>
            </ol>
            <div class="spinner-border text-success spinner-border-lg">
              </div>
          </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
  
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div>
              <table id="tableticker" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%">
                <thead class="g-bg-color-darkgrey g-color-white">
                  <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">Ticker</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </section>
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
<script type="text/javascript" charset="utf8" src="{{ asset('assets/js/tickermodals.js') }}"></script>
<!-- Swal -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/swal-forms.js')}}" type="text/javascript"></script>
<!-- Boostrap Toggle -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>

<script>

</script>
@stop