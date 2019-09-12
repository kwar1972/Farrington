@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Modal form-->
            <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 id="userTitle" class="modal-title g-color-white" id="myModalLabel"></h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                      <form id="form1" action="">
                      <div class="row">
                        <div class="col-12">
                          <p><b>Personal Information</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                        
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Name:</b></label>
                          <input type="text" class="form-control" id="name" name="name" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Lastame:</b></label>
                          <input type="text" class="form-control" id="lastname" name="lastname" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Email:</b></label>
                          <input type="text" class="form-control" id="email" name="email" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>phone:</b></label>
                          <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Mobile:</b></label>
                          <input type="text" class="form-control" id="mobile" name="mobile" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Address:</b></label>
                          <input type="text" class="form-control" id="addr" name="addr" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>State / City:</b></label>
                          <input type="text" class="form-control" id="state" name="state" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Country:</b></label>
                          <input type="text" class="form-control" id="country" name="country" value="">
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div id="createpass" class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Password:</b></label>
                          <input type="password" class="form-control" id="password" name="password" value="">
                        </div>
                        <div id="createpass2" class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Password confirmation:</b></label>
                          <input type="password" class="form-control" id="passwordC" name="passwordC" value="">
                        </div>
                        <div id="sendveriemail" class="col-12 f-size-14 mb-0 text-center">
                          
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <hr>
                          <p><b>Bank Details</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row mb-2">
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Account number:</b></label>
                            <input type="text" class="form-control" id="account" name="account" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>SWIFT:</b></label>
                            <input type="text" class="form-control" id="swift" name="swift" value="">
                          </div>
                          <div class="col-4 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Routing:</b></label>
                            <input type="text" class="form-control" id="routing" name="routing" value="">
                          </div>
                        <div class="col-2 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Currency:</b></label>
                          <input type="text" class="form-control" id="coin" name="coin" value="">
                        </div>
                        
                      </div>
                      <div id="usersysteminfoT" class="row">
                        <div class="col-12">
                          <hr>
                            <p><b>System Information</b></p>
                          <hr>
                        </div>
                      </div>
                      <div id="usersysteminfo" class="row">
                          <div class="col-4 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Validated:</b></label>
                            <input type="text" class="form-control" id="validated" name="validated" value="">
                          </div>
                          
                          <div class="col-4 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Created:</b></label>
                            <input type="text" class="form-control" id="created" name="created" value="">
                          </div>
                          <div class="col-4 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Last Updated:</b></label>
                            <input type="text" class="form-control" id="updated" name="updated" value="">
                          </div>
                      </div>
                      <div id="userstatus" class="row mt-4">
                        <div class="col-4 f-size-14 mb-0 text-right">
                            <label class="mb-1" class="mb-0"><b>Roles:</b></label>
                        </div>
                        <div class="col-2 f-size-14 mb-0">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" value="2">
                                  <label for="customRadio1" class="custom-control-label">Admin</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" value="3">
                                  <label for="customRadio2" class="custom-control-label">Agent</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 f-size-14 mb-0 text-left">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio3"  name="customRadio" value="4">
                                  <label for="customRadio3" class="custom-control-label">Loader</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio4"  name="customRadio" value="5">
                                  <label for="customRadio4" class="custom-control-label">Client</label>
                                </div>
                            </div>
                          </div>
                        <div class="col-4 f-size-14 mb-0">
                            <label><b>Status:</b></label>&nbsp;
                            <input id="active" type="checkbox" checked data-toggle="toggle" data-onstyle="outline-primary" data-offstyle="outline-danger" data-id="" data-on="Enabled" data-loaded="0" data-off="Disabled" data-width="80" data-size="sm">
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
            <!-- Modal Holdings-->
              <div class="modal fade bs-example-modal-lg" id="myModalHolding" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 1055;">
                <div class="modal-dialog  modal-lg">
                  <div class="modal-content">
                    <div class="modal-header g-bg-grey">
                      <h4 class="modal-title g-color-white" id="myModalLabel">Client's Trades</h4>
                      <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body modal-system-custom">
                        <table id="tabletrades" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%;z-index: 1056;">
                            <thead>
                              <tr>
                                <th class="text-center">id</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">Ticker</th>
                                <th class="text-center">Agent</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                              </tr>
                            </tbody>
                          </table>
                  </div>
                  <div id="btnClusterS" class="modal-footer g-bg-grey" id="modal_footerq">
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- end of modal Holdings------------------------------>
            <!-- Modal Trades-->
            <div class="modal fade bs-example-modal-lg" id="myModalTrades" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 1055;">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 class="modal-title g-color-white" id="myModalLabel">Client's Trades</h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body modal-system-custom">
                      <table id="tabletrades" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%;z-index: 1056;">
                          <thead>
                            <tr>
                              <th class="text-center">id</th>
                              <th class="text-center">Client</th>
                              <th class="text-center">Ticker</th>
                              <th class="text-center">Agent</th>
                              <th class="text-center">Amount</th>
                              <th class="text-center">Price</th>
                              <th class="text-center">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                            </tr>
                          </tbody>
                        </table>
                </div>
                <div id="btnClusterS" class="modal-footer g-bg-grey" id="modal_footerq">
                  
                </div>
              </div>
            </div>
          </div>
            <!-- end of modal Trade------------------------------>
            <!-- Modal System-->
            <div class="modal fade bs-example-modal-lg" id="myModalSystem" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 1055;">
                <div class="modal-dialog  modal-lg">
                  <div class="modal-content">
                    <div class="modal-header g-bg-grey">
                      <h4 class="modal-title g-color-white" id="myModalLabel">User Details</h4>
                      <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body modal-system-custom">
                        <table id="tablesystem" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%;z-index: 1056;">
                            <thead>
                              <tr>
                                <th class="text-center">User</th>
                                <th class="text-center">Last Login</th>
                                <th class="text-center">IP Address</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                              </tr>
                            </tbody>
                          </table>
                  </div>
                  <div id="btnClusterS" class="modal-footer g-bg-grey" id="modal_footerq">
                    
                  </div>
                </div>
              </div>
            </div>
              <!-- end of modal System------------------------------>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-users"></i> User Manager <button  class="btn btn-sm btn-primary g-color-white-user-i" data-toggle="tooltip" data-placement="right" title="Create User" onclick="open_createModal()">Add new user</button></h1>
            
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item"><a href="userman">User Manager</a></li>
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
              <table id="tableuser" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%">
                <thead class="g-bg-color-darkgrey g-color-white">
                  <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">name</th>
                    <th class="text-center">lastname</th>
                    <th class="text-center">email</th>
                    <th class="text-center">Role</th>
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
<script type="text/javascript" charset="utf8" src="{{ asset('assets/js/usermodals.js') }}"></script>
<!-- Swal -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/swal-forms.js')}}" type="text/javascript"></script>
<!-- Boostrap Toggle -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>

@stop