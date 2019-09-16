@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Modal  Personal Details-->
            <div class="modal fade bs-example-modal-lg" id="modalPersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 id="userTitle" class="modal-title g-color-white" id="myModalLabel">Personal Information</h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class="g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                      <form id="form1" action="">
                      <div class="row mb-4">
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
                          <input type="text" class="form-control" id="emailp" name="email" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>phone:</b></label>
                          <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Mobile:</b></label>
                          <input type="text" class="form-control" id="mobile" name="mobile" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Address:</b></label>
                          <input type="text" class="form-control" id="addr" name="addr" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>State:</b></label>
                          <input type="text" class="form-control" id="state" name="state" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>City:</b></label>
                          <input type="text" class="form-control" id="city" name="city" value="">
                        </div>
                      </div>
                      <div class="row mb-4">
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Zip:</b></label>
                            <input type="text" class="form-control" id="zip" name="zip" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Country:</b></label>
                            <input type="text" class="form-control" id="country" name="country" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                           
                          </div>
                        </div>
                      <div class="row mb-2">
                        
                       <div class="col-sm-12 text-center  align-content-center"> 
                          <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                              @csrf
                          {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                          <input id="email" type="hidden" class="form-control" name="email" value="{{auth()->user()->email}}" required autofocus>
                          <button type="submit" class="btn btn-outline-success">{{ __('Reset Password') }}</button>
                          </form>
                        </div>
                        
                      </div>
                    </form>
                </div>
                <div id="btnCluster" class="modal-footer g-bg-grey" id="modal-footerq">
                      
                </div>
              </div>
            </div>
          </div>
            <!-- end of Personal Details modal ------------------------------>
            <!-- Modal  Bank Details-->
            <div class="modal fade bs-example-modal-lg" id="modalBank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
          
    <!-- Content Header (Page header) -->
  
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
          <div class="row">
          <div class="col-sm-6">
          <div class="row">
            {{-- <div class="col-sm-1 col-lg-1"></div> --}}
            <div class="col-sm-12 col-lg-12">
            <!-- Profile Image -->
            <div class="card card-primary card-outline g-bg-color-darkgrey">
              
              <div class="card-body box-profile">
                <div class="text-center">
                    <h1 class="g-color-white">Personal Details</h1>
                  <img class="profile-user-img img-fluid img-circle"
                       src="/img/profile.png"
                       alt="User profile picture">
                </div>

                <h3 id="namep" class="profile-username text-center g-color-white">{{auth()->user()->name}}&nbsp;{{auth()->user()->lastname}}</h3>

                <p id="emailp" class="text-muted text-center">{{auth()->user()->email}}</p>
                <div class="row">
                    <div class="col-sm-1 col-lg-1"></div>
                    <div class="col-sm-10 col-lg-10">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>Phone</b> <a id="phonep" class="float-right">{{auth()->user()->phone}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>Mobile</b> <a id="mobilep" class="float-right">{{auth()->user()->mobile}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>Address</b> <a id="addrp" class="float-right">{{auth()->user()->addr}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>City</b> <a id="cityp" class="float-right">{{auth()->user()->city}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>State</b> <a id="statep" class="float-right">{{auth()->user()->state}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Zip</b> <a id="zipp" class="float-right">{{auth()->user()->zip}}</a>
                    </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey mb-4">
                    <b>Country</b> <a id="countryp" class="float-right">{{auth()->user()->country}}</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block" onClick="openclientData({{auth()->user()->id}})"><b class=" g-color-white">Edit</b></a>
                  </div>
                  <div class="col-sm-1 col-lg-1"></div>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            {{-- <div class="col-sm-1 col-lg-1"></div> --}}
          </div>
          </div>
          <div class="col-sm-6">
          <div class="row">
              {{-- <div class="col-sm-1 col-lg-1"></div> --}}
              <div class="col-sm-12 col-lg-12">
              <!-- Profile Image -->
              <div class="card card-primary card-outline g-bg-color-darkgrey">
                
                <div class="card-body box-profile">
                  <div class="text-center">
                      <h1 class="g-color-white">Bank Details</h1>
                      <span class="fa-stack fa-lg " style="font-size: 64px;">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                        </span> 
                        <h3 id="namep" class="profile-username text-center g-color-white">{{auth()->user()->getBank[0]->bankname}}</h3>
                  </div>
                  
                  <div class="row">
                      <div class="col-sm-1 col-lg-1"></div>
                      <div class="col-sm-10 col-lg-10">
                  <ul class="list-group list-group-unbordered mb-3 mt-3">
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Country</b> <a class="float-right">{{auth()->user()->getBank[0]->country}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Account ID</b> <a class="float-right">{{auth()->user()->getBank[0]->accid}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Account</b> <a class="float-right">{{auth()->user()->getBank[0]->account}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Account Name</b> <a class="float-right">{{auth()->user()->getBank[0]->accname}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>SWIFT / BIC</b> <a class="float-right">{{auth()->user()->getBank[0]->swift}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>IBAN</b> <a class="float-right">{{auth()->user()->getBank[0]->iban}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey mb-4">
                      <b>Currency</b> <a class="float-right">{{auth()->user()->getBank[0]->currency}}</a>
                    </li>
                  </ul>
                  <a href="#" class="btn btn-primary btn-block" onClick="openclientBank({{auth()->user()->id}})"><b class=" g-color-white">Edit</b></a>
                    </div>
                    <div class="col-sm-1 col-lg-1"></div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              </div>
              {{-- <div class="col-sm-1 col-lg-1"></div> --}}
            </div>
          </div>
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
<script type="text/javascript" charset="utf8" src="{{ asset('assets/js/clients.js') }}"></script>
<!-- Swal -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/swal-forms.js')}}" type="text/javascript"></script>
<!-- Boostrap Toggle -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>

@stop