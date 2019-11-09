$(document).ready(function() {
  settableUser();
});

function settableUser() {  
  $.ajax({
  'url': "users",
  'method': "GET",
  'contentType': 'application/json',
  beforeSend: function(){
    $.LoadingOverlay("show");
   },
  }).done( function(data) {
    $.LoadingOverlay("hide");
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
                  var roleClient = '<span class="badge badge-pill badge-success">Client</span>';
                  var roleAgent = '<span class="badge badge-pill badge-primary">Agent</span>';
                  var roleAdmin = '<span class="badge badge-pill badge-danger">Admin</span>';
                  var roleLoader = '<span class="badge badge-pill badge-secondary">Loader</span>';
                  switch(row.isadmin) {
                    case 2:
                      return roleAdmin
                    case 3:
                      return roleAgent
                    case 4:
                      return roleLoader
                    case 5:
                      return roleClient
                  } 
                }
              },
              { mRender: function (data, type, row) {
                var enabledStatus = '<span class="badge badge-pill badge-primary">Enabled</span>';
                var disabledStatus = '<span class="badge badge-pill badge-danger">Disabled</span>';
                  if(row.isactive == 1){
                    return  enabledStatus
                  }else{
                    return  disabledStatus
                  };
                },
              },
              { mRender: function (data, type, row) {
                  var linkEdit = '<div class="btn-group"><p class="btn btn-sm btn-warning font-weight-bold" onClick="open_systemModal(' + row.id + ');" data-toggle="tooltip" data-placement="left" title="System Activity!"><i class="fas fa-cog"></i></p><p class="btn btn-sm btn-success font-weight-bold" type="button" data-toggle="tooltip" data-placement="top" title="Trades" onClick="open_tradesModal(' + row.id + ')"><i class="fas fa-chart-line"></i></p><p class="btn btn-sm btn-primary font-weight-bold" onClick="open_viewModal(' + row.id + ');" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></p><p class="btn btn-sm btn-danger font-weight-bold" onClick="deleteconfirm(' + row.id + ');" data-toggle="tooltip" data-placement="right" title="Delete" onClick="deleteconfirm(' + row.id + ');"><i class="fa fa-trash"></i></p></div>';
                  return  linkEdit
                },
              },
            ]
      });
      $('[data-toggle="tooltip"]').tooltip();   
  });
};

function open_createModal(){
  $('#usersysteminfoT').show();
  $('#usersysteminfo').hide();
  $('#userstatus').show();
  $('#name').val('');
  $('#lastname').val('');
  $('#email').val('');
  $('#phone').val('');
  $('#mobile').val('');
  $('#addr').val('');
  $('#state').val('');
  $('#bankname').val('');
  $('#countrybank').val('');
  $('#accid').val('');
  $('#accname').val('');
  $('#account').val('');
  $('#swift').val('');
  $('#iban').val('');
  $('#coin').val('');
  $('#validated').val('');
  $('#userTitle').html('User Create');
  $('#createpass').show();
  $('#createpass2').show();
  $('#sendveriemail').hide();
  $('#customRadio4').prop('checked', true);
  $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formUC()">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
  $('#myModal').modal('show');
  
};

function open_viewModal(id) {
  $.ajax({
    type:'GET',
    url:'/userdetail/'+id,
    'contentType': 'application/json',
    beforeSend: function(){
      $.LoadingOverlay("show");
     },
    }).done( function(data) {
      $.LoadingOverlay("hide");
    setModalBox();
    $('#myModal').modal('show');
    
  function setModalBox() {
    

if( typeof data[0] != 'undefined'){
    if(data[0].isadmin == 5 ){
    $('#bankdet1').show();
    $('#bankdet2').show();
    $('#bankdet3').show();
    $('#usersysteminfoT').show();
    $('#usersysteminfo').show();
    $('#userstatus').show();
    $('#createpass').show();
    $('#createpass2').show();
    $('#sendveriemail').html('<label class="mb-1" class="mb-0"><b>Send Validation E-mail:</b></label><br><button class="btn btn-outline-success btn-sm" onClick="sendveriemail('+ data[0].id +')">Send!</button>');
    $('#userTitle').html('User Edit');
    $('#name').val(data[0].name);
    $('#lastname').val(data[0].lastname);
    $('#email').val(data[0].email);
    $('#phone').val(data[0].phone);
    $('#mobile').val(data[0].mobile);
    $('#balance').val(data[0].balance);
    $('#addr').val(data[0].addr);
    $('#state').val(data[0].state+' / '+ data[0].city);
    if(typeof data[0].get_bank[0] != 'undefined'){
      $('#bankname').val(data[0].get_bank[0].bankname);
      $('#countrybank').val(data[0].get_bank[0].country);
      $('#accid').val(data[0].get_bank[0].accid);
      $('#accname').val(data[0].get_bank[0].accname);
      $('#account').val(data[0].get_bank[0].account);
      $('#swift').val(data[0].get_bank[0].swift);
      $('#iban').val(data[0].get_bank[0].iban);
      $('#coin').val(data[0].get_bank[0].currency);
    }else{
      $('#bankname').val('');
      $('#countrybank').val('');
      $('#accid').val('');
      $('#accname').val('');
      $('#account').val('');
      $('#swift').val('');
      $('#iban').val('');
      $('#coin').val('');
    }
    $('#validated').val(data[0].email_verified_at);
    $('#created').val(data[0].created_at);
    $('#updated').val(data[0].updated_at);
    
    switch(data[0].isadmin) {
      case 2:
        $('#customRadio1').prop('checked', true);
        break;
      case 3:
        $('#customRadio2').prop('checked', true);
        break;
      case 4:
        $('#customRadio3').prop('checked', true);
        break;
      case 5:
        $('#customRadio4').prop('checked', true);
        break;
    } 
    if(data[0].isadmin == '5'){
      $( "#x" ).prop( "checked", true );
    }
    if (data[0].isactive == '1') {
      $('#active').bootstrapToggle('on');
    }else {
      $('#active').bootstrapToggle('off');
    }
    if (data[0].isadmin == '1') {
      $('#role').bootstrapToggle('on');
    }else{
      $('#role').bootstrapToggle('off');
    }
    $('#country').val(data[0].country);
    $('#created').html(data[0].created_at);
    $('#updated').html(data[0].updated_at);
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formUE(' + data[0].id + ')">Save</p> <p id="closemodal" class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');


  } else {

    $('#bankdet1').hide();
    $('#bankdet2').hide();
    $('#bankdet3').hide();
    $('#usersysteminfoT').show();
    $('#usersysteminfo').show();
    $('#userstatus').show();
    $('#createpass').show();
    $('#createpass2').show();
    $('#sendveriemail').html('<label class="mb-1" class="mb-0"><b>Send Validation E-mail:</b></label><br><button class="btn btn-outline-success btn-sm" onClick="sendveriemail('+ data[0].id +')">Send!</button>');
    $('#userTitle').html('User Edit');
    $('#name').val(data[0].name);
    $('#lastname').val(data[0].lastname);
    $('#email').val(data[0].email);
    $('#balance').val(data[0].balance);
    $('#phone').val(data[0].phone);
    $('#mobile').val(data[0].mobile);
    $('#addr').val(data[0].addr);
    $('#state').val(data[0].state+' / '+ data[0].city);
    $('#validated').val(data[0].email_verified_at);
    $('#created').val(data[0].created_at);
    $('#updated').val(data[0].updated_at);
    
    switch(data[0].isadmin) {
      case 2:
        $('#customRadio1').prop('checked', true);
        break;
      case 3:
        $('#customRadio2').prop('checked', true);
        break;
      case 4:
        $('#customRadio3').prop('checked', true);
        break;
      case 5:
        $('#customRadio4').prop('checked', true);
        break;
    } 
    if(data[0].isadmin == '5'){
      $( "#x" ).prop( "checked", true );
    }
    if (data[0].isactive == '1') {
      $('#active').bootstrapToggle('on');
    }else {
      $('#active').bootstrapToggle('off');
    }
    if (data[0].isadmin == '1') {
      $('#role').bootstrapToggle('on');
    }else{
      $('#role').bootstrapToggle('off');
    }
    $('#country').val(data[0].country);
    $('#created').html(data[0].created_at);
    $('#updated').html(data[0].updated_at);
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data[0]-dismiss="modal" onClick="save_formUE(' + data[0].id + ')">Save</p> <p id="closemodal" class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
  };





}else{

  if(data.isadmin == 5 ){
    $('#bankdet1').show();
    $('#bankdet2').show();
    $('#bankdet3').show();
    $('#usersysteminfoT').show();
    $('#usersysteminfo').show();
    $('#userstatus').show();
    $('#createpass').show();
    $('#createpass2').show();
    $('#sendveriemail').html('<label class="mb-1" class="mb-0"><b>Send Validation E-mail:</b></label><br><button class="btn btn-outline-success btn-sm" onClick="sendveriemail('+ data.id +')">Send!</button>');
    $('#userTitle').html('User Edit');
    $('#name').val(data.name);
    $('#lastname').val(data.lastname);
    $('#email').val(data.email);
    $('#balance').val(data.balance);
    $('#phone').val(data.phone);
    $('#mobile').val(data.mobile);
    $('#addr').val(data.addr);
    $('#state').val(data.state+' / '+ data.city);
    $('#validated').val(data.email_verified_at);
    $('#created').val(data.created_at);
    $('#updated').val(data.updated_at);
    
    switch(data.isadmin) {
      case 2:
        $('#customRadio1').prop('checked', true);
        break;
      case 3:
        $('#customRadio2').prop('checked', true);
        break;
      case 4:
        $('#customRadio3').prop('checked', true);
        break;
      case 5:
        $('#customRadio4').prop('checked', true);
        break;
    } 
    if(data.isadmin == '5'){
      $( "#x" ).prop( "checked", true );
    }
    if (data.isactive == '1') {
      $('#active').bootstrapToggle('on');
    }else {
      $('#active').bootstrapToggle('off');
    }
    if (data.isadmin == '1') {
      $('#role').bootstrapToggle('on');
    }else{
      $('#role').bootstrapToggle('off');
    }
    $('#country').val(data.country);
    $('#created').html(data.created_at);
    $('#updated').html(data.updated_at);
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formUE(' + data.id + ')">Save</p> <p id="closemodal" class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');


  } else {

    $('#bankdet1').hide();
    $('#bankdet2').hide();
    $('#bankdet3').hide();
    $('#usersysteminfoT').show();
    $('#usersysteminfo').show();
    $('#userstatus').show();
    $('#createpass').show();
    $('#createpass2').show();
    $('#sendveriemail').html('<label class="mb-1" class="mb-0"><b>Send Validation E-mail:</b></label><br><button class="btn btn-outline-success btn-sm" onClick="sendveriemail('+ data.id +')">Send!</button>');
    $('#userTitle').html('User Edit');
    $('#name').val(data.name);
    $('#lastname').val(data.lastname);
    $('#email').val(data.email);
    $('#balance').val(data.balance);
    $('#phone').val(data.phone);
    $('#mobile').val(data.mobile);
    $('#addr').val(data.addr);
    $('#state').val(data.state+' / '+ data.city);
    $('#validated').val(data.email_verified_at);
    $('#created').val(data.created_at);
    $('#updated').val(data.updated_at);
    
    switch(data.isadmin) {
      case 2:
        $('#customRadio1').prop('checked', true);
        break;
      case 3:
        $('#customRadio2').prop('checked', true);
        break;
      case 4:
        $('#customRadio3').prop('checked', true);
        break;
      case 5:
        $('#customRadio4').prop('checked', true);
        break;
    } 
    if(data.isadmin == '5'){
      $( "#x" ).prop( "checked", true );
    }
    if (data.isactive == '1') {
      $('#active').bootstrapToggle('on');
    }else {
      $('#active').bootstrapToggle('off');
    }
    if (data.isadmin == '1') {
      $('#role').bootstrapToggle('on');
    }else{
      $('#role').bootstrapToggle('off');
    }
    $('#country').val(data.country);
    $('#created').html(data.created_at);
    $('#updated').html(data.updated_at);
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formUE(' + data.id + ')">Save</p> <p id="closemodal" class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
  };



};
  }
  });
};

$('#myModalSystem').on('hidden.bs.modal', function () {
  $('#tablesystem').DataTable().destroy();
});
$('#myModal').on('hidden.bs.modal', function () {
  $('#tableuser').DataTable().destroy();
  settableUser();
});
$('#myModalTrades').on('hidden.bs.modal', function () {
  $('#tabletrades').DataTable().destroy();
});

  // function holdingModalBox(id) {
  //   $.ajax({
  //     type:'GET',
  //     url:'/userdetail/'+id,
  //     'contentType': 'application/json',
  //     beforeSend: function(){
  //       $.LoadingOverlay("show");
  //      },
  //     }).done( function(data) {
  //       $.LoadingOverlay("hide");
  //     setModalBox();
  //     $('#myModalHolding').modal('show');

  //     function setModalBox() {
  //       $('#nameh').html(data.name);
  //       $('#lastnameh').html(data.lastname);
  //       $('#emailh').html(data.email);
  //       $('#phoneh').html(data.phone);
  //       $('#mobileh').html(data.mobile);
  //       $('#addrh').html(data.addr);
  //       $('#stateh').html(data.state + data.city);
  //       $('#validatedh').html(data.email_verified_at);
  //       if (data.isactive == '1') {
  //         $('#statush').html('<span class="badge badge-pill badge-primary">Active</span>');
  //       }else {
  //         $('#statush').html('<span class="badge badge-pill badge-danger">Inactive</span>');
  //       }
  //       if (data.isadmin == '1'){
  //         $('#roleh').html('<span class="badge badge-pill badge-danger">Admin</span>');
  //       }else{
  //         $('#roleh').html('<span class="badge badge-pill badge-success">User</span>');
  //       }
  //       $('#createdh').html(data.created_at);
  //       $('#updatedh').html(data.updated_at);
  //       $('#btnClusterH').html('<p class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><b>Close</b></p>');
  //     }
  //   });
  // };

  function open_systemModal(id) {
    $.ajax({
    'url': "/userslogins/"+id,
    'method': "GET",
    'contentType': 'application/json',
    beforeSend: function(){
      $.LoadingOverlay("show");
     },
    }).done( function(data) {
      $.LoadingOverlay("hide");
      $('#myModalSystem').modal('show');
      setModalBox();
      
      function setModalBox() {
        $('#btnClusterS').html('</p> <p class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><b>Close</b></p>');
      }
      $('#tablesystem').dataTable({
        "aaData": data,
        "columnDefs": [
          {
            "className": "text-center", "targets": "_all"
          },
        ],
        "columns": [
          { "data": "name" },
          { "data": "last_login_at" },
          { "data": "last_login_ip" },
        ]
      });
    });
  };

  function open_tradesModal(id) {
    console.log(id);
    $.ajax({
    'url': "/tradelist/"+id,
    'method': "GET",
    'contentType': 'application/json',
    beforeSend: function(){
      $.LoadingOverlay("show");
     },
    }).done( function(data) {
      $.LoadingOverlay("hide");
      console.log(data);
      $('#myModalTrades').modal('show');
      setModalBox();
      
      function setModalBox() {
        $('#btnClusterT').html('<p class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><b>Close</b></p>');
      }
      $('#tabletrades').dataTable({
        "aaData": data,
        "columnDefs": [
          {
            "className": "text-center", "targets": "_all"
          },
        ],
        "columns": [
          { "data": "get_ticker.ticker" },
          { mRender: function (data, type, row) {
                return row.get_agent.name + ' ' + row.get_agent.lastname
          }
          },
          { "data": "amount" },
          { "data": "price" },
          { "data": "fee" },
          { "data": "total" },
        ]
      });
    });
  };

function save_formUC(){
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    
    timer: 3000
  })
  
  if($('#active').prop("checked") == true) {
    userActive = 1;
  } else {
    userActive = 0;
  }
  var data = {
    "name" : $('#name').val(),
    "lastname" : $('#lastname').val(),
    "email" : $('#email').val(),
    "phone" : $('#phone').val(),
    "mobile" : $('#mobile').val(),
    "addr" : $('#addr').val(),
    "state" : $('#state').val(),
    "country" : $('#country').val(),
    "password" : $('#password').val(),
    "balance" : $('#balance').val(),
    "isadmin" : $('input:radio[name=customRadio]:checked').val(),
    "isactive" : userActive
  }
      $.ajax({
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/usercreate/',
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
              title: '<span style="color: #fff !important;">User successfully Created!</span>'
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

function save_formUE(id){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  if($('#role').prop("checked") == true) {
    userRole = 1;
  } else {
    userRole = 0;
  }
  if($('#active').prop("checked") == true) {
    userActive = 1;
  } else {
    userActive = 0;
  }
  var username = $('#name').val();
  var lastname = $('#lastname').val();
  var data = {
    "name" : $('#name').val(),
    "lastname" : $('#lastname').val(),
    "email" : $('#email').val(),
    "phone" : $('#phone').val(),
    "mobile" : $('#mobile').val(),
    "addr" : $('#addr').val(),
    "state" : $('#state').val(),
    "country" : $('#country').val(),
    "account" : $('#account').val(),
    "password" : $('#password').val(),
    "balance" : $('#balance').val(),
    "isadmin" : $('input:radio[name=customRadio]:checked').val(),
    "isactive" : userActive
  }
      $.ajax({
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/useredit/'+id,
        data: data,
        dataType: 'json',
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
        $('#sideusername').html(username+' '+lastname);
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">User successfully updated!</span>'
          });
          $('#myModal').modal('hide');
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
        url:'/userdelete/'+id,
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">User successfully deleted!</span>'
          });
          $('#tableuser').DataTable().destroy();
          settableUser();
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

function sendveriemail(id){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  Swal.fire({
    title: 'Are you sure?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, send it!',
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
        url:'/resenduseremail/'+id,
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">Verification email successfully sent!</span>'
          });
          $('#tableuser').DataTable().destroy();
          settableUser();
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