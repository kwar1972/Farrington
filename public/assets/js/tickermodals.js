$(document).ready(function(){
  tableticker();
});

function tableticker() {
  $.ajax({
  'url': "tickers",
  'method': "GET",
  'contentType': 'application/json',
  beforeSend: function(){
    $.LoadingOverlay("show");
   },
  }).done( function(data) {
    $.LoadingOverlay("hide");
      $('#tableticker').dataTable( {
            "aaData": data,
            "rowId": data.id,
            "columnDefs": [
              {
                "className": "text-center", "targets": "_all"
              },
            ],
            "columns": [
              { "data": "id" },
              { "data": "ticker" },
              { "data": "description" },
              { "data": "quantity" },
              { "data": "price" , render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { mRender: function (data, type, row) {
                var enabledStatus = '<span class="badge badge-pill badge-primary">Enabled</span>';
                var disabledStatus = '<span class="badge badge-pill badge-danger">Disabled</span>';
                if(row.active == 1){
                  return  enabledStatus
                }else{
                  return  disabledStatus
                };
              },
             },
              { mRender: function (data, type, row) {
                  var linkEdit = '<div class="btn-group" role="group"><button class="btn btn-sm btn-primary font-weight-bold" onClick="open_viewModal(' + row.id + ');" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></button><button class="btn btn-sm btn-danger font-weight-bold" onClick="deleteconfirm(' + row.id + ');" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></button></div>';
                  return  linkEdit
                },
              },
            ]
      });
      
      $('[data-toggle="tooltip"]').tooltip();   
  });
};

function open_createModal(){
  $('#tickerStatus').hide();
  $('#tickersubtitle').hide();
  $('#ticker').val('');
  $('#description').val('');
  $('#quantity').val('');
  $('#price').val('');
  $('#tickerTitle').html('Ticker Create');
  $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formTC()">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
  $('#myModal').modal('show');
};

function open_viewModal(id) {
  $('#tickerStatus').show();
  $('#tickersubtitle').show();
  $.ajax({
    type:'GET',
    url:'/tickerdetail/'+id,
    'contentType': 'application/json',
    beforeSend: function(){
      $.LoadingOverlay("show");
     },
    }).done( function(data) {
      $.LoadingOverlay("hide");
    setModalBox();
    $('#myModal').modal('show');

  function setModalBox() {
    $('#tickerTitle').html('Ticker Edit');
    $('#ticker').val(data.ticker);
    $('#description').val(data.description);
    $('#quantity').val(data.quantity);
    $('#price').val(data.price);
    $('#active').val(data.active);
    var loaded = $('#active').attr('data-loaded');
    if (data.active == '1' && loaded == '0' ) {
      $('#active').bootstrapToggle('on');
      $('#active').attr('data-id', data.id);
    }else if(loaded == '0') {
      $('#active').bootstrapToggle('off');
      $('#active').attr('data-id', data.id);
    }
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formTE(' + data.id + ')">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
    $('#active').attr('data-loaded', 1);
  }
  });
};
$('#myModal').on('hidden.bs.modal', function () {
  $('#active').attr('data-loaded', 0);
  $('#tableticker').DataTable().destroy();
  tableticker();
});

// Use toggle with ajax to enable/disable Tickers
$("#active").change(function() {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  var loaded = $('#active').attr('data-loaded');
  if( loaded == '1') {
    tickerId = $('#active').attr('data-id');
    console.log(tickerId);
    if(this.checked == true) {
      tickerVal = 1;
    } else {
      tickerVal = 0;
    }
    $.ajax({
        type:'GET',
        url:'/swapticker/',
        data:{tickerId: tickerId, tickerVal: tickerVal},
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
            console.log(data.success);
             if(data.success == 1){
                Toast.fire({
                    background: '#007bff',
                    type: 'success',
                    title: '<span style="color: #fff !important;">The ticker has been Enabled</span>'
                });
            } else {
                Toast.fire({
                    background: '#dc3545',
                    type: 'warning',
                    title: '<span style="color: #fff !important;">The ticker has been disabled</span>'
                });
            }
        }
     );
  }
});


function save_formTC(){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  var data = {
    "ticker" : $('#ticker').val(),
    "description" : $('#description').val(),
    "quantity" : $('#quantity').val(),
    "price" : $('#price').val()
  }
  console.log(data);
      $.ajax({
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/tickercreate/',
        data: data,
        dataType: 'json',
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">Ticker successfully created!</span>'
          });
      } else {
          Toast.fire({
              background: '#dc3545',
              type: 'error',
              title: '<span style="color: #fff !important;">Somethig happend!</span>'
          });    
      }
    })
  };

function save_formTE(id){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  var data = {
    "ticker" : $('#ticker').val(),
    "description" : $('#description').val(),
    "quantity" : $('#quantity').val(),
    "price" : $('#price').val(),
    "active" : $('#active').val()
  }
console.log(data);
    $.ajax({
      type:'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      url:'/tickeredit/'+id,
      data: data,
      dataType: 'json',
      beforeSend: function(){
        $.LoadingOverlay("show");
       },
      }).done( function(data) {
        $.LoadingOverlay("hide");
      if(data.success == 1){
        Toast.fire({
            background: '#007bff',
            type: 'success',
            title: '<span style="color: #fff !important;">Ticker successfully updated!</span>'
        });
    } else {
        Toast.fire({
            background: '#dc3545',
            type: 'error',
            title: '<span style="color: #fff !important;">Somethig happend!</span>'
        });    
    }
  })
};

function deleteconfirm(id){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    cancelButtonColor: '#d33',
    reverseButtons: false
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/tickerdelete/'+id,
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">Ticker successfully deleted!</span>'
          });
          $('#tableticker').DataTable().destroy();
          tableticker();
      } else {
          Toast.fire({
              background: '#dc3545',
              type: 'error',
              title: '<span style="color: #fff !important;">Somethig happend!</span>'
          });    
      }
    })
     
    } else {
    }
  })
};
  