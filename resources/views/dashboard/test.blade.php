@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <h2>Stacked Bootstrap Modal Example.</h2>
        <a data-toggle="modal" href="#myModal" class="btn btn-primary">Launch modal</a>
       
       <div class="modal fade" id="myModal">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h4 class="modal-title">Modal 1</h4>
       
                   </div>
                   <div class="container"></div>
                   <div class="modal-body">Content for the dialog / modal goes here.
                       <br>
                       <br>
                       <br>
                       <p>more content</p>
                       <br>
                       <br>
                       <br>	<a data-toggle="modal" href="#myModal2" class="btn btn-primary">Launch modal</a>
       
                   </div>
                   <div class="modal-footer">	<a href="#" data-dismiss="modal" class="btn">Close</a>
           <a href="#" class="btn btn-primary">Save changes</a>
       
                   </div>
               </div>
           </div>
       </div>
       <div class="modal fade rotate" id="myModal2">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h4 class="modal-title">Modal 2</h4>
       
                   </div>
                   <div class="container"></div>
                   <div class="modal-body">Content for the dialog / modal goes here.
                       <br>
                       <br>
                       <p>come content</p>
                       <br>
                       <br>
                       <br>	<a data-toggle="modal" href="#myModal3" class="btn btn-primary">Launch modal</a>
       
                   </div>
                   <div class="modal-footer">	<a href="#" data-dismiss="modal" class="btn">Close</a>
           <a href="#" class="btn btn-primary">Save changes</a>
       
                   </div>
               </div>
           </div>
       </div>
       <div class="modal fade" id="myModal3">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h4 class="modal-title">Modal 3</h4>
       
                   </div>
                   <div class="container"></div>
                   <div class="modal-body">Content for the dialog / modal goes here.
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>	<a data-toggle="modal" href="#myModal4" class="btn btn-primary">Launch modal</a>
       
                   </div>
                   <div class="modal-footer">	<a href="#" data-dismiss="modal" class="btn">Close</a>
           <a href="#" class="btn btn-primary">Save changes</a>
       
                   </div>
               </div>
           </div>
       </div>
       <div class="modal fade" id="myModal4">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h4 class="modal-title">Modal 4</h4>
       
                   </div>
                   <div class="container"></div>
                   <div class="modal-body">Content for the dialog / modal goes here.</div>
                   <div class="modal-footer">	<a href="#" data-dismiss="modal" class="btn">Close</a>
           <a href="#" class="btn btn-primary">Save changes</a>
       
                   </div>
               </div>
           </div>
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
<script type="text/javascript" charset="utf8" src="{{ asset('assets/js/tickermodals.js') }}"></script>
<script>
$(document).ready(function () {

$('#openBtn').click(function () {
    $('#myModal').modal({
        show: true
    })
});

    $(document).on('show.bs.modal', '.modal', function (event) {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });


});
</script>

@stop