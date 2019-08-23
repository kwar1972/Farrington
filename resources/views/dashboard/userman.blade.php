@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Modal form-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-xl">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 class="modal-title g-color-white" id="myModalLabel">User Details</h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-12">
                          <p><b>Personal Information</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Name:</b></p>
                          <p class="f-size-14 mt-1" id="name"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Lastame:</b></p>
                          <p class="f-size-14 mt-1" id="lastname"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Email:</b></p>
                          <p class="f-size-14 mt-1" id="email"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>phone:</b></p>
                          <p class="f-size-14 mt-1" id="phone"></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Mobile:</b></p>
                          <p class="f-size-14 mt-1" id="mobile"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Address:</b></p>
                          <p class="f-size-14 mt-1" id="addr"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>State / City:</b></p>
                          <p class="f-size-14 mt-1" id="state"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Country:</b></p>
                          <p class="f-size-14 mt-1" id="country"></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <hr>
                          <p><b>Bank Details</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row mb-5">
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Account number:</b></p>
                            <p class="f-size-14 mt-1" id="acc">211654612354654-45/4585</p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>SWIFT:</b></p>
                            <p class="f-size-14 mt-1" id="swift">LALXX896</p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Routing:</b></p>
                            <p class="f-size-14 mt-1" id="routing">31354343457420004534</p>
                          </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Currency:</b></p>
                          <p class="f-size-14 mt-1" id="coin">Dolar (USD)</p>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <hr>
                            <p><b>System Information</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Validated:</b></p>
                            <p class="f-size-14 mt-1" id="validated"></p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Status:</b></p>
                            <p class="f-size-14 mt-1" id="status"></p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Role:</b></p>
                            <p class="f-size-14 mt-1" id="role"></p>
                          </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Created:</b></p>
                          <p class="f-size-14 mt-1" id="created"></p>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Updated:</b></p>
                          <p class="f-size-14 mt-1" id="updated"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          
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
            <!-- Modal Holdings-->
            <div class="modal fade" id="myModalHolding" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialogH  modal-xl">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 class="modal-title g-color-white" id="myModalLabel">User Details</h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-12">
                          <p><b>Personal Information</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Name:</b></p>
                          <p class="f-size-14 mt-1" id="nameh"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Lastame:</b></p>
                          <p class="f-size-14 mt-1" id="lastnameh"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Email:</b></p>
                          <p class="f-size-14 mt-1" id="emailh"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>phone:</b></p>
                          <p class="f-size-14 mt-1" id="phoneh"></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Mobile:</b></p>
                          <p class="f-size-14 mt-1" id="mobileh"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Address:</b></p>
                          <p class="f-size-14 mt-1" id="addrh"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>State / City:</b></p>
                          <p class="f-size-14 mt-1" id="stateh"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Country:</b></p>
                          <p class="f-size-14 mt-1" id="countryh"></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <hr>
                          <p><b>Bank Details</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row mb-5">
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Account number:</b></p>
                            <p class="f-size-14 mt-1" id="acch">211654612354654-45/4585</p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>SWIFT:</b></p>
                            <p class="f-size-14 mt-1" id="swifth">LALXX896</p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Routing:</b></p>
                            <p class="f-size-14 mt-1" id="routingh">31354343457420004534</p>
                          </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Currency:</b></p>
                          <p class="f-size-14 mt-1" id="coinh">Dolar (USD)</p>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <hr>
                            <p><b>System Information</b></p>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Validated:</b></p>
                            <p class="f-size-14 mt-1" id="validatedh"></p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Status:</b></p>
                            <p class="f-size-14 mt-1" id="statush"></p>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <p class="mb-0"><b>Role:</b></p>
                            <p class="f-size-14 mt-1" id="roleh"></p>
                          </div>
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Created:</b></p>
                          <p class="f-size-14 mt-1" id="createdh"></p>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-3 f-size-14 mb-0">
                          <p class="mb-0"><b>Updated:</b></p>
                          <p class="f-size-14 mt-1" id="updatedh"></p>
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          
                        </div>
                      </div>
                      
                      
                    
                </div>
                <div id="btnClusterH" class="modal-footer g-bg-grey" id="modal-footerq">
                      
                </div>
              </div>
            </div>
          </div>
            <!-- end of modal Holdings------------------------------>
            <!-- Modal System-->
            <div class="modal fade" id="myModalSystem" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialogS  modal-xl">
                  <div class="modal-content">
                    <div class="modal-header g-bg-grey">
                      <h4 class="modal-title g-color-white" id="myModalLabel">User Details</h4>
                      <button type="button" class="close pull-right" data-dismiss="modal"><span class=" g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body modal-dialog modal-system-custom">
                        <table id="tablesystem" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="width:100%">
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
            <h1 class="m-0 text-dark">User Manager <a href="adduser" class="btn btn-sm btn-primary g-color-white-user-i">Add new user</a></h1>
            
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
                <thead>
                  <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">name</th>
                    <th class="text-center">lastname</th>
                    <th class="text-center">email</th>
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

<script>
  $(document).ready(function() {
    
    $("#loaderDiv").show();
    $.ajax({
    'url': "users",
    'method': "GET",
    'contentType': 'application/json',
    }).done( function(data) {
      console.log(data);
        $('#tableuser').dataTable( {
              "aaData": data,
              "columnDefs": [
                {
                  "className": "text-center", "targets": "_all"
                },
              ],
              "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "lastname" },
                { "data": "email" },
                { mRender: function (data, type, row) {
                    var linkEdit = '<div class="btn-group"><p class="btn btn-sm btn-warning font-weight-bold" onClick="open_systemModal(' + row.id + ');" data-toggle="tooltip" data-placement="left" title="System Activity!"><i class="fas fa-cog"></i></p><p class="btn btn-sm btn-success font-weight-bold" type="button" onClick="open_tradesModal(' + row.id + ');"><i class="fas fa-chart-line"></i></p><p class="btn btn-sm btn-info font-weight-bold" type="button" onClick="holdingModalBox(' + row.id + ');"><i class="fas fa-layer-group"></i></p><p class="btn btn-sm btn-primary font-weight-bold" onClick="open_viewModal(' + row.id + ');"><i class="fa fa-edit"></i></p></div>';
                    return  linkEdit
                  },
                },
              ]
        });
        $('[data-toggle="tooltip"]').tooltip();   
    });
  });
</script>
@stop