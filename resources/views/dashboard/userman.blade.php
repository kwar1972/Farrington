@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Manager</h1>
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
    <!-- /.content-header -->
  
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
                    <div class="spinner-border text-secondary" role="status" style="display: none;"><span class="sr-only">Loading...</span></div>
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
    $.ajax({
    'url': "users",
    'method': "GET",
    'contentType': 'application/json',
    beforeSend: function () { $(".spinner-border").show(); },
    complete: function () { $(".spinner-border").hide(); }, 
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
                      var linkEdit = '<div class="btn-group"><p class="viewBtn btn btn-sm btn-success font-weight-bold" type="button" data-childid="' + row.id + '"><i class="fa fa-eye"></i></p><p class="editBtn btn btn-sm btn-info font-weight-bold" type="button" data-childid="' + row.id + '"><i class="fa fa-edit"></i></p><p class="delBtn btn btn-sm btn-danger font-weight-bold" data-childdelid="' + row.id + '"><i class="fa fa-trash"></i></p></div>';
                      linkEdit = linkEdit.replace("-1", row.id);
                      
                      return  linkEdit
                  },
                },
              ]
        });
    });
  });
</script>
@stop