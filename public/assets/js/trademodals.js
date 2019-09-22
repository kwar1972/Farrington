$(document).ready(function() {
    $('#status').on('change', function(){
      if($('#status').val() == 'Confirmed' || $('#status').val() == 'Purchased' || $('#status').val() == 'Invoiced' || $('#status').val() == 'Sold'){
        $('#purchaseddeiv').show();
      }else{
        $('#purchaseddeiv').hide();
      }
    });

    $('#status').on('change', function(){
      if($('#status').val() == 'Paid' || $('#status').val() == 'Confirmed' || $('#status').val() == 'Purchased' || $('#status').val() == 'Invoiced' || $('#status').val() == 'Sold'){
        $('#depositdiv').show();
      }else{
        $('#depositdiv').hide();
      }
    });

    // Date Picker
    $('#deposit').datepicker({
      format: 'yyyy/mm/dd',
      uiLibrary: 'bootstrap4'
    });
    $('#purchased').datepicker({
      format: 'yyyy/mm/dd',
      uiLibrary: 'bootstrap4'
    });
    // Set Tables
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
      var price = $("#price").val();
      var fee = $('#fee').val();
      sum += ($(this).val() * price);
      var per = Number(sum / 100) * fee;
      tot  = (sum + per);
  });
   
  // set the computed value to 'totalPrice' textbox
  $('#total').val(tot.toFixed(2));
   
});


$('#ticker').change(function(){
  $('#price').val($(this).children(':selected').data('price'));
});




$('#ticker').change(function(){
  $('#price').val($(this).children(':selected').data('price'));
    var price = $("#price").val();
    var amount = $("#amount").val();
    var sum = (amount * price);
    var fee = $(this).val();
    var per = Number(sum / 100) * fee;
    tot  = (sum + per);
    if(isNaN(tot)){
      $('#total').val(price * amount);
    }else{
      $('#total').val(tot.toFixed(2));
    }
});


$('#fee').keyup(function () {
  $('#fee').each(function() {
    var price = $("#price").val();
    var amount = $("#amount").val();
    var sum = (amount * price);
    var fee = $(this).val();
    var per = Number(sum / 100) * fee;
    tot  = (sum + per);
  });
  if(isNaN(tot)){
    $('#total').val(price * amount);
  }else{
    $('#total').val(tot.toFixed(2));
  }
});

$('#fee').change(function () {
  $('#fee').each(function() {
    var price = $("#price").val();
    var amount = $("#amount").val();
    var sum = (amount * price);
    var fee = $(this).val();
    var per = Number(sum / 100) * fee;
    tot  = (sum + per);
  });

  if(isNaN(tot)){
    $('#total').val(price * amount);
  }else{
    $('#total').val(tot.toFixed(2));
  }
});

$('#price').change(function () {
  $('#price').each(function() {
    var fee = $("#fee").val();
    var amount = $("#amount").val();
    var price = $(this).val();
    var sum = (amount * price);
    var per = Number((sum) / 100) * fee;
    tot  = (sum + per);
  });
  if(isNaN(tot)){
    $('#total').val(price * amount);
  }else{
    $('#total').val(tot.toFixed(2));
  }
});

$('#price').keyup(function () {
  $('#price').each(function() {
    var fee = $("#fee").val();
    var amount = $("#amount").val();
    var price = $(this).val();
    var sum = (amount * price);
    var per = Number((sum) / 100) * fee;
    tot  = (sum + per);
  });
  if(isNaN(tot)){
    $('#total').val(price * amount);
  }else{
    $('#total').val(tot.toFixed(2));
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
                { mRender: function (data, type, row) {
                  var fee = row.fee+' %';
                  return  fee
                },
              },
                { "data": "total" },
                { mRender: function (data, type, row) {
                  var pending = '<span class="badge badge-pill badge-seconday">Pending</span>';
                  var Paid = '<span class="badge badge-pill badge-info">Paid</span>';
                  var confirmed = '<span class="badge badge-pill badge-success">Confirmed</span>';
                  var Purchased = '<span class="badge badge-pill badge-primary">Purchased</span>';
                  var Invoiced = '<span class="badge badge-pill badge-orange">Invoiced</span>';
                  var Sold = '<span class="badge badge-pill badge-indigo">Sold</span>';
                  var Cancelled = '<span class="badge badge-pill badge-danger">Cancelled</span>';
                  switch(row.status) {
                    case "Pending":
                        return pending
                    case "Paid":
                      return Paid
                    case "Confirmed":
                        return confirmed
                    case "Purchased":
                      return Purchased
                    case "Invoiced":
                      return Invoiced
                    case "Sold":
                      return Sold
                    case "Cancelled":
                      return Cancelled
                  } 
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


  function StockPrice(){
    
  }
  //-------------Create Modal

  function openCreateModal(){
    $('#userTitle').html('New Trade');
    $("#purchaseddeiv").hide();
    $("#statusdiv").hide();
    $('#depositdiv').hide();
    $('#fee').val('1');
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formTC()">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
    $('#createModal').modal('show');
    $('#amount').val(' ');
    var amount = $('#amount').val();
    var price = $('#price').val();
    $('#total').val(' ');
  };


  

//-------------Destroy and call datatable ---------------------------
  // $('#createModal').on('hidden.bs.modal', function () {
  //   $('#tabletrades').DataTable().destroy();
  //   settableTrades();
  // });
  

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
    "total" : $('#total').val()
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
    $("#statusdiv").show();
    if(data.status == 'Paid'){
      $('#depositdiv').show();
    }else if(data.status == 'Cancelled' || data.status == 'Pending' ){
      $('#depositdiv').hide();
    }
    $('#userTitle').html('Edit Trade');
    if(data.status == 'Confirmed'){
      $('#purchaseddeiv').show();
      $('#purchased').datepicker().children('input').val(data.purchased_at);
    }else{
      $('#purchaseddeiv').hide();
    }
    $("#client").val(data.userid);
    $('#ticker').val(data.tickerid);
    $('#agent').val(data.agentid);
    $('#amount').val(data.amount);
    $('#price').val(data.price);
    $('#fee').val(data.fee);
    $('#total').val(data.total);
    $("#status").val(data.status);
    $('#deposit').datepicker().children('input').val(data.deposit_at);
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
    "status" : $('#status').val(),
    "deposit" : $('#deposit').datepicker().children('input').val(),
    "purchased" : $('#purchased').datepicker().children('input').val()
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



