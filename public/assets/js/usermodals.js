$(document).ready(function() {
  settableUser();
});
function settableUser() {  
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
              var enabledStatus = '<span class="badge badge-pill badge-primary">Enabled</span>';
              var disabledStatus = '<span class="badge badge-pill badge-danger">Disabled</span>';
              console.log(row.isactive);
              if(row.isactive == 1){
                return  enabledStatus
              }else{
                return  disabledStatus
              };
            },
           },
              { mRender: function (data, type, row) {
                  var linkEdit = '<div class="btn-group"><p class="btn btn-sm btn-warning font-weight-bold" onClick="open_systemModal(' + row.id + ');" data-toggle="tooltip" data-placement="left" title="System Activity!"><i class="fas fa-cog"></i></p><p class="btn btn-sm btn-success font-weight-bold" type="button" onClick="open_tradesModal(' + row.id + ');" data-toggle="tooltip" data-placement="top" title="Trades"><i class="fas fa-chart-line"></i></p><p class="btn btn-sm btn-info font-weight-bold" type="button" onClick="holdingModalBox(' + row.id + ');" data-toggle="tooltip" data-placement="bottom" title="Holdings"><i class="fas fa-layer-group"></i></p><p class="btn btn-sm btn-primary font-weight-bold" onClick="open_viewModal(' + row.id + ');" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></p><p class="btn btn-sm btn-danger font-weight-bold" onClick="deleteconfirm(' + row.id + ');" data-toggle="tooltip" data-placement="right" title="Delete" onClick="deleteconfirm(' + row.id + ');"><i class="fa fa-trash"></i></p></div>';
                  return  linkEdit
                },
              },
            ]
      });
      $('[data-toggle="tooltip"]').tooltip();   
  });
};

function open_createModal(){
  $('#usersysteminfoT').hide();
  $('#usersysteminfo').hide();
  $('#userstatus').hide();
  $('#name').val('');
  $('#lastname').val('');
  $('#email').val('');
  $('#phone').val('');
  $('#mobile').val('');
  $('#addr').val('');
  $('#state').val('');
  $('#account').val('');
  $('#swift').val('');
  $('#routing').val('');
  $('#coin').val('');
  $('#validated').val('');
  $('#userTitle').html('User Create');
  $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formUC()">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
  $('#myModal').modal('show');
};
function open_viewModal(id) {
  $.ajax({
    type:'GET',
    url:'/userdetail/'+id,
    'contentType': 'application/json',
  }).done( function(data) {
    setModalBox();
    $('#myModal').modal('show');

  function setModalBox() {
    $('#usersysteminfoT').show();
    $('#usersysteminfo').show();
    $('#userstatus').show();
    $('#userTitle').html('User Edit');
    $('#name').val(data.name);
    $('#lastname').val(data.lastname);
    $('#email').val(data.email);
    $('#phone').val(data.phone);
    $('#mobile').val(data.mobile);
    $('#addr').val(data.addr);
    $('#state').val(data.state+' / '+ data.city);
    $('#account').val('211654612354654-45/4585');
    $('#swift').val('LALXX896');
    $('#routing').val('31354343457420004534');
    $('#coin').val('Dolar (USD)');
    $('#validated').val(data.email_verified_at);
    $('#created').val(data.created_at);
    $('#updated').val(data.updated_at);
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
    $('#created').html(data.created_at);
    $('#updated').html(data.updated_at);
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formUE(' + data.id + ')">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
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

  function holdingModalBox(id) {
    $.ajax({
      type:'GET',
      url:'/userdetail/'+id,
      'contentType': 'application/json',
    }).done( function(data) {
      setModalBox();
      $('#myModalHolding').modal('show');

      function setModalBox() {
        $('#nameh').html(data.name);
        $('#lastnameh').html(data.lastname);
        $('#emailh').html(data.email);
        $('#phoneh').html(data.phone);
        $('#mobileh').html(data.mobile);
        $('#addrh').html(data.addr);
        $('#stateh').html(data.state + data.city);
        $('#validatedh').html(data.email_verified_at);
        if (data.isactive == '1') {
          $('#statush').html('<span class="badge badge-pill badge-primary">Active</span>');
        }else {
          $('#statush').html('<span class="badge badge-pill badge-danger">Inactive</span>');
        }
        if (data.isadmin == '1'){
          $('#roleh').html('<span class="badge badge-pill badge-danger">Admin</span>');
        }else{
          $('#roleh').html('<span class="badge badge-pill badge-success">User</span>');
        }
        $('#createdh').html(data.created_at);
        $('#updatedh').html(data.updated_at);
        $('#btnClusterH').html('<p class="btn btn-sm btn-outline-success" onClick="open_systemModal(' + data.id + ')"><b>System Activity</b></p> <p class="btn btn-sm btn-outline-warning"><b>Trades</b></p> <p class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><b>Close</b></p>');
      }
    });
  };

  function open_systemModal(id) {
    $.ajax({
    'url': "/userslogins/"+id,
    'method': "GET",
    'contentType': 'application/json',
    }).done( function(data) {
      $('#myModalSystem').modal('show');
      setModalBox();
      
      function setModalBox() {
        $('#btnClusterS').html('<p id="holdingsbtn" class="btn btn-sm btn-outline-info" onClick="holdingModalBox(' + data.id + ')"><b>Holding</b></p> <p class="btn btn-sm btn-outline-warning"><b>Trades</b></p> <p class="btn btn-sm btn-outline-secondary" data-dismiss="modal" onClick="killtablesystem()"><b>Close</b></p>');
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
    "swift" : $('#swift').val(),
    "routing" : $('#routing').val(),
    "coin" : $('#coin').val(),
    "isadmin" : userRole,
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
      }).done( function(data) {
        $('#sideusername').html(username+' '+lastname);
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">User successfully updated!</span>'
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
        url:'/userdelete/'+id
      }).done( function(data) {
        if(data.success == 1){
          Toast.fire({
              type: 'success',
              title: 'User successfully deleted!'
          });
          $('#tableuser').DataTable().destroy();
          settableUser();
      } else {
          Toast.fire({
              type: 'error',
              title: 'Somethig happend!'
          });    
      }
    })
     
    } else {
    }
  })
};