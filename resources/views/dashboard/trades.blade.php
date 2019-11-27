@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Modal form-->
            <div class="modal fade bs-example-modal-lg" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 id="userTitle" class="modal-title g-color-white" id="myModalLabel"></h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                      <form id="form1" action="">
                      <div class="row">
                        <div class="col-4 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Client:</b></label>
                          <div class='input-group'>
                              <div class="input-group-prepend">
                                  <span class="input-group-text formicon-dark"><i class="fas fa-user"></i></span>
                                </div>
                          <select class="form-control" id="client" name="client">
                           
                          </select> 
                          </div>
                        </div>
                        <div class="col-4 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Ticker:</b></label>
                          <div class='input-group'>
                              <div class="input-group-prepend">
                                  <span class="input-group-text formicon-dark"><i class="fa fa-stack-overflow"></i></span>
                                </div>
                          <select class="form-control" id="ticker" name="ticker">
                            
                          </select> 
                          </div>
                        </div>
                        <div class="col-4 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Agent:</b></label>
                          <div class='input-group'>
                              <div class="input-group-prepend">
                                  <span class="input-group-text formicon-dark"><i class="fas fa-user-tie"></i></span>
                                </div>
                          <select class="form-control" id="agent" name="agent">
                            
                          </select> 
                          </div>
                        </div>
                      </div>
                      <div class="row pt-2">
                        <div class="col-4 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Amount:</b></label>
                          <div class='input-group '>
                              <div class="input-group-prepend">
                                  <span class="input-group-text formicon-dark"><i class="fas fa-sort-amount-up"></i></span>
                                </div>
                          <input type="text" class="form-control" id="amount" name="amount" value="">
                          </div>
                        </div>
                        <div class="col-4 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Price:</b></label>
                          <div class='input-group'>
                              <div class="input-group-prepend">
                                  <span class="input-group-text formicon-dark">$</span>
                                </div>
                          <input class="form-control" id="price" name="price"  value="">
                          </div>
                        </div>
                        <div class="col-4 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Fee:</b></label>
                          <div class='input-group'>
                              <div class="input-group-prepend">
                                  <span class="input-group-text formicon-dark">%</i></span>
                                </div>
                          <input class="form-control" id="fee" name="fee" type="number" step="1" min="-100" max="100.00" value="1">
                        </div>
                        </div>
                      </div>
                      <div class="row pt-2">
                        <div class="col-4 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Total:</b></label>
                            <div class='input-group'>
                            <div class="input-group-prepend">
                                <span class="input-group-text formicon-dark"><i class="fas fa-dollar-sign"></i></span>
                              </div>
                          <input type="text" class="form-control" id="total" name="total" value="">
                        </div>
                        </div>
                        <div id="statusdiv" class="col-4">
                            <label class="mb-1" class="mb-0"><b>Status:</b></label>
                            <div class='input-group'>
                                <div class="input-group-prepend">
                                    <span class="input-group-text formicon-dark"><i class="fas fa-exclamation"></i></span>
                                  </div>
                            <select class="form-control" id="status" name="status">
                              <option value="Pending">Pending</option>
                              <option value="Paid">Paid</option>
                              <option value="Confirmed">Confirmed</option>
                              <option value="Purchased">Purchased</option>
                              <option value="Invoiced">Invoiced</option>
                              <option value="Sold">Sold</option>
                              <option value="Cancelled">Cancelled</option>
                            </select>
                            </div>
                        </div>
                        <div id="depositdiv" class="col-4">
                          <label class="mb-1" class="mb-0"><b>Deposit:</b></label>
                          <div class='input-group date' id='deposit'>
                              <div class="input-group-prepend">
                                  <span class="input-group-text formicon-dark"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                              <input class="form-control" type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                        </div>
                      </div>
                      <div id="purchaseddiv" class="row mt-2">
                          <div id='purchaseddeiv' class="col-4">
                            <label class="mb-1" class="mb-0"><b>Purchased:</b></label>
                            <div class='input-group date' id='purchased'>
                                <div class="input-group-prepend">
                                    <span class="input-group-text formicon-dark"><i class="fas fa-calendar-alt"></i></span>
                                  </div>
                                <input class="form-control" type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                          </div>
                      </div>
                      <div id="ipo" class="col-4 text-center">
                          <label class="mb-1" class="mb-0"><b>IPO Price:</b></label>
                          <div class='input-group'>
                          <div class="input-group-prepend">
                              <span class="input-group-text formicon-dark"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                        <input type="text" class="form-control" id="ipoprice" name="ipoprice" value="">
                      </div>
                      </div>
                      <div class="col-4 text-center">
                      </div>
                      </div>
                    </form>
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
          <div id="loader" class="overlay">
              
          </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-exchange-alt"></i> Trade Manager <button  class="btn btn-sm btn-primary g-color-white-user-i" data-toggle="tooltip" data-placement="right" title="Create trade" onclick="openCreateModal()">Add new trade</button></h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item"><a href="userman">User Manager</a></li>
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
                    <th class="text-center">id</th>
                    <th class="text-center">User</th>
                    <th class="text-center">Agent</th>
                    <th class="text-center">Ticker</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Fee (%)</th>
                    <th class="text-center">Total</th>
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
<script type="text/javascript" charset="utf8" src="{{ asset('assets/js/trademodals.js') }}"></script>
<!-- Swal -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/swal-forms.js')}}" type="text/javascript"></script>
<!-- Boostrap Toggle -->
{{-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script> --}}


@stop