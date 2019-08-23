  function open_viewModal(id)
  {
    $.ajax({
      type:'GET',
      url:'/userdetail/'+id,
      'contentType': 'application/json',
    }).done( function(data) {
      console.log(id);
      setModalBox();
      $('#myModal').modal('show');
  
    function setModalBox()
    {
      $('#name').html(data.name);
      $('#lastname').html(data.lastname);
      $('#email').html(data.email);
      $('#phone').html(data.phone);
      $('#mobile').html(data.mobile);
      $('#addr').html(data.addr);
      $('#state').html(data.state+' / '+ data.city);
      $('#validated').html(data.email_verified_at);
      if (data.isactive == '1'){
        $('#status').html('<span class="badge badge-pill badge-primary">Active</span>');
      }else{
        $('#status').html('<span class="badge badge-pill badge-danger">Inactive</span>');
      }
      if (data.isadmin == '1'){
        $('#role').html('<span class="badge badge-pill badge-danger">Admin</span>');
      }else{
        $('#role').html('<span class="badge badge-pill badge-success">User</span>');
      }
      $('#created').html(data.created_at);
      $('#updated').html(data.updated_at);
      $('#myModal').attr('class', 'modal fade bs-example-modal-lg').attr('aria-labelledby','myLargeModalLabel');
      $('.modal-dialog').attr('class','modal-dialog modal-lg');
      $('#btnCluster').html('<p class="btn btn-sm btn-outline-success" onClick="open_systemModal(' + data.id + ')"><b>System Activity</b></p> <p id="holdingsbtn" class="btn btn-sm btn-outline-info" onClick="holdingModalBox(' + data.id + ')"><b>Holding</b></p> <p class="btn btn-sm btn-outline-warning"><b>Trades</b></p> <p class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</p>');
    }
    
  });
};

  function holdingModalBox(id)
  {
    
    $.ajax({
      type:'GET',
      url:'/userdetail/'+id,
      'contentType': 'application/json',
    }).done( function(data) {
      console.log(id);
      setModalBox();
      $('#myModalHolding').modal('show');

      function setModalBox()
      {
        $('#nameh').html(data.name);
        $('#lastnameh').html(data.lastname);
        $('#emailh').html(data.email);
        $('#phoneh').html(data.phone);
        $('#mobileh').html(data.mobile);
        $('#addrh').html(data.addr);
        $('#stateh').html(data.state + data.city);
        $('#validatedh').html(data.email_verified_at);
        if (data.isactive == '1'){
          $('#statush').html('<span class="badge badge-pill badge-primary">Active</span>');
        }else{
          $('#statush').html('<span class="badge badge-pill badge-danger">Inactive</span>');
        }
        if (data.isadmin == '1'){
          $('#roleh').html('<span class="badge badge-pill badge-danger">Admin</span>');
        }else{
          $('#roleh').html('<span class="badge badge-pill badge-success">User</span>');
        }
        $('#createdh').html(data.created_at);
        $('#updatedh').html(data.updated_at);
        $('#myModalHolding').attr('class', 'modal fade bs-example-modal-lg').attr('aria-labelledby','myLargeModalLabel');
        $('.modal-dialogH').attr('class','modal-dialog modal-lg');
        $('#btnClusterH').html('<p class="btn btn-sm btn-outline-success" onClick="open_systemModal(' + data.id + ')"><b>System Activity</b></p> <p class="btn btn-sm btn-outline-warning"><b>Trades</b></p> <p class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><b>Close</b></p>');
      }
    });
  };

  function open_systemModal(id)
  {
    $.ajax({
    'url': "/userslogins/"+id,
    'method': "GET",
    'contentType': 'application/json',
    }).done( function(data) {
      $('#myModalSystem').modal('show');
      setModalBox();
      
      function setModalBox()
      {
        $('#myModalSystem').attr('class', 'modal fade bs-example-modal-lg').attr('aria-labelledby','myLargeModalLabel');
        $('.modal-dialogS').attr('class','modal-dialog modal-lg');
        $('#btnClusterS').html('<p id="holdingsbtn" class="btn btn-sm btn-outline-info" onClick="holdingModalBox(' + data.id + ')"><b>Holding</b></p> <p class="btn btn-sm btn-outline-warning"><b>Trades</b></p> <p class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><b>Close</b></p>');
      }
      console.log(data);
      $('#tablesystem').dataTable( {
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
