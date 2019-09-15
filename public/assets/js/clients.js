$(document).ready(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        
        timer: 3000
    });
  });

  function openclientData(id) {
    $.ajax({
        'url': '/clientdet/'+id,
        'method': "GET",
        'contentType': 'application/json',
        }).done( function(data) {
            console.log(data);
            setModalBox();
            $('#modalPersonal').modal('show');
            function setModalBox() {
                $('#name').val(data.name);
                $('#lastname').val(data.lastname);
                $('#emailp').val(data.email);
                $('#password').val(data.password);
                $('#phone').val(data.phone);
                $('#mobile').val(data.mobile);
                $('#addr').val(data.addr);
                $('#state').val(data.state);
                $('#city').val(data.city);
                $('#zip').val(data.zip);
                $('#country').val(data.country);
                $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="savePersonal(' + data.id + ')">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
              }
            
            
            
        });
        
        
  };

  function openclientBank(id) {
    $.ajax({
        'url': '/clientbank/'+id,
        'method': "GET",
        'contentType': 'application/json',
        }).done( function(data) {
            setModalBox();
            $('#modalBank').modal('show');
            function setModalBox() {
                $('#bankname').val(data[0].bankname);
                $('#accid').val(data[0].accid);
                $('#account').val(data[0].account);
                $('#accname').val(data[0].accname);
                $('#swift').val(data[0].swift);
                $('#iban').val(data[0].iban);
                $('#currency').val(data[0].currency);
                $('#country2').val(data[0].country);
                $('#btnClusterB').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="saveBank()">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
              }
        });
  };

  function savePersonal(id) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      })
    var username = $('#name').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var mobile = $('#mobile').val();
    var addr = $('#addr').val();
    var state = $('#state').val();
    var city = $('#city').val();
    var zip = $('#zip').val();
    var country = $('#country').val();
    var data = {
        "name" : $('#name').val(),
        "lastname" : $('#lastname').val(),
        "email" : $('#email').val(),
        "phone" : $('#phone').val(),
        "mobile" : $('#mobile').val(),
        "addr" : $('#addr').val(),
        "state" : $('#state').val(),
        "city" : $('#city').val(),
        "zip" : $('#zip').val(),
        "country" : $('#country').val()
    }
    console.log(data);
    $.ajax({
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/saveclient/'+id,
        data: data,
        dataType: 'json',
      }).done( function(data) {
        
        $('#sideusername').html(username+' '+lastname);
        $('#namep').html(username+' '+lastname);
        $('#emailp').html(email);
        $('#phonep').html(phone);
        $('#mobilep').html(mobile);
        $('#addrp').html(addr);
        $('#statep').html(state);
        $('#cityp').html(city);
        $('#zipp').html(zip);
        $('#countryp').html(country);
        $('#email').val(email);
        if(data.success == 1){
          Toast.fire({
              background: '#007bff',
              type: 'success',
              title: '<span style="color: #fff !important;">Your details has been saved!</span>'
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