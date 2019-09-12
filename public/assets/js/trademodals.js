$(document).ready(function() {
    settableTrades();
    $('[data-toggle="tooltip"]').tooltip();
    $.ajax({
      url: 'tradeagent',
      type: 'get',
      contentType: 'application/json',
      success:function(response){
          var len = response.length;
          $("#agent").empty();
          for( var i = 0; i<len; i++){
              var id = response[i]['id'];
              var name = response[i]['name'];
              var lastname = response[i]['lastname'];
              $("#agent").append("<option value='"+id+"'>"+name+" "+lastname+"</option>");
          }
      }
    });

    $.ajax({
      url: 'tickers',
      type: 'get',
      contentType: 'application/json',
      success:function(response){
          var len = response.length;
          $("#ticker").empty();
          for( var i = 0; i<len; i++){
              var id = response[i]['id'];
              var ticker = response[i]['ticker'];
              var price = response[i]['price'];
              $("#ticker").append("<option value='"+id+"' data-price='"+price+"'>"+ticker+"</option>");
              
          }
          var price = $('#ticker').find('option:selected').data('price');
              console.log(price);
              $('#price').val(price);
      }
    });

    $.ajax({
      url: 'tradeuser',
      type: 'get',
      contentType: 'application/json',
      beforeSend: function(){
        
       },
      success:function(response){
          var len = response.length;
          $("#client").empty();
          for( var i = 0; i<len; i++){
              var id = response[i]['id'];
              var name = response[i]['name'];
              var lastname = response[i]['lastname'];
              $("#client").append("<option value='"+id+"'>"+name+" "+lastname+"</option>");
          }
      },
    });
    
  });

  // we used jQuery 'keyup' to trigger the computation as the user type
$('#amount').keyup(function () {
 
  // initialize the sum (total price) to zero
  var sum = 0;
   
  // we use jQuery each() to loop through all the textbox with 'price' class
  // and compute the sum for each loop
  $('#amount').each(function() {
      sum += Number($(this).val() * $('#price').val());
  });
   
  // set the computed value to 'totalPrice' textbox
  $('#total').val(sum);
   
});


$('#ticker').change(function(){
  $('#price').val($(this).children(':selected').data('price'));
});



$('#fee').keyup(function () {
  var tot = 0;
  var price = parseInt($("#price").val());
  var amount = parseInt($("#amount").val());
  $('#fee').each(function() {
    var price = parseInt($("#price").val());
    var amount = parseInt($("#amount").val());
    var sum = (amount * price);
    var fee = parseInt($(this).val());
    var per = Number((sum) / 100) * fee;
    tot  = (sum + per);
  });
  if(isNaN(tot)){
    $('#total').val(price * amount);
  }else{
    $('#total').val(tot);
  }
});
$('#ticker').change(function(){
  $('#price').val($(this).children(':selected').data('price'));
});



$('#fee').change(function () {
  var tot = 0;
  var price = parseInt($("#price").val());
  var amount = parseInt($("#amount").val());
  $('#fee').each(function() {
    var price = parseInt($("#price").val());
    var amount = parseInt($("#amount").val());
    var sum = (amount * price);
    var fee = parseInt($(this).val());
    var per = Number((sum) / 100) * fee;
    tot  = (sum + per);
  });
  if(isNaN(tot)){
    $('#total').val(price * amount);
  }else{
    $('#total').val(tot);
  }
});
$('#price').change(function () {
  var tot = 0;
  var fee = parseInt($('#fee').val());
  var amount = parseInt($("#amount").val());
  $('#fee').each(function() {
    var fee = parseInt($("#fee").val());
    var amount = parseInt($("#amount").val());
    var price = parseInt($(this).val());
    var sum = (amount * price);
    var per = Number((sum) / 100) * fee;
    tot  = (sum + per);
  });
  if(isNaN(tot)){
    $('#total').val(price * amount);
  }else{
    $('#total').val(tot);
  }
});
  
  function settableTrades() {  
    $("#loaderDiv").show();
    $.ajax({
    'url': "trademanlist",
    'method': "GET",
    'contentType': 'application/json',
    beforeSend: function(){
      
     
     },
     success:function(data) {
        $('#tabletrades').dataTable( {
              "aaData": data,
              "columnDefs": [
                {
                  "className": "text-center", "targets": "_all"
                },
              ],
              "columns": [
                { "data": "id" },
                { mRender: function (data, type, row) {
                  var username = '<span>' + row.get_users.name + ' ' + row.get_users.lastname + '</span>';
                  return username;
                }},
                { mRender: function (data, type, row) {
                  var agentname = '<span>' + row.get_agent.name + ' ' + row.get_agent.lastname + '</span>';
                  return agentname;
                }},
                { mRender: function (data, type, row) {
                  var ticker = '<span>' + row.get_ticker.ticker +'</span>';
                  return ticker;
                }},
                { "data": "amount" },
                { "data": "price" },
                { "data": "fee" },
                { "data": "total" },
                { mRender: function (data, type, row) {
                  var enabledStatus = '<span class="badge badge-pill badge-primary">Pending</span>';
                  var disabledStatus = '<span class="badge badge-pill badge-danger">Cancelled</span>';
                    if(row.status == 1){
                      return  enabledStatus
                    }else{
                      return  disabledStatus
                    };
                },
                },
                { mRender: function (data, type, row) {
                    var linkEdit = '<div class="btn-group"><p class="btn btn-sm btn-primary font-weight-bold" onClick="open_editModal(' + row.id + ');" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></p><p class="btn btn-sm btn-danger font-weight-bold" onClick="deleteconfirm(' + row.id + ');" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></p></div>';
                    return  linkEdit
                  },
                },
              ]
        });
           
    },
    complete:function(){
      
    }
    });
  };

  //-------------Create Modal

  function openCreateModal(){
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formTC()">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
    $('#createModal').modal('show');
    $('#amount').val(1);
    var amount = $('#amount').val();
    var price = $('#price').val();
    $('#fee').val(0);
    $('#total').val(amount * price);
  };


//-------------Destroy and call datatable ---------------------------
  $('#createModal').on('hidden.bs.modal', function () {
    $('#tabletrades').DataTable().destroy();
    settableTrades();
  });
  

  //----------------- Save Trade ------------------------------------------------
  function save_formTC(){
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    
    timer: 3000
  });

  var data = {
    "clientid" : $('#client').val(),
    "tickerid" : $('#ticker').val(),
    "agentid" : $('#agent').val(),
    "amount" : $('#amount').val(),
    "price" : $('#price').val(),
    "fee" : $('#fee').val(),
    "total" : $('#total').val(),
    "status" : $('#status').val()
  }
      $.ajax({
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/tradesave/',
        data: data,
        dataType: 'json',
      }).done( function(data) {
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">Trade successfully Created!</span>'
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

//--------------------------------------Trade Edit Modal ----------------------------------------------------------------------------------------------------------
function open_editModal(id) {
  $.ajax({
    type:'GET',
    url:'/tradedetail/'+id,
    'contentType': 'application/json',
  }).done( function(data) {
    
  setModalBox(data);
  $('#createModal').modal('show');
  
  });
  function setModalBox(data) {
    $("#client").val(data.userid);
    $('#ticker').val(data.tickerid);
    $('#agent').val(data.agentid);
    $('#amount').val(data.amount);
    $('#price').val(data.price);
    $('#fee').val(data.fee);
    $('#total').val(data.total);
    $("#status").val(data.status);
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formTE(' + data.id + ')">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
  }
};

//---------------------Save Edit Trade -----------------------------------------------------------
function save_formTE(id){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  var data = {
    "clientid" : $('#client').val(),
    "tickerid" : $('#ticker').val(),
    "agentid" : $('#agent').val(),
    "amount" : $('#amount').val(),
    "price" : $('#price').val(),
    "fee" : $('#fee').val(),
    "total" : $('#total').val(),
    "status" : $('#status').val()
  }
      $.ajax({
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/tradeedit/'+id,
        data: data,
        dataType: 'json',
      }).done( function(data) {
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">Trade successfully updated!</span>'
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
        url:'/tradedelete/'+id
      }).done( function(data) {
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">Trade successfully deleted!</span>'
          });
          $('#tabletrades').DataTable().destroy();
          settableTrades();
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