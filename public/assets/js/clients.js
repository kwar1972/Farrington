$(document).ready(function() {
    
});

  function openclientData(id) {
    $.ajax({
        'url': '/clientdet/'+id,
        'method': "GET",
        'contentType': 'application/json',
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
            console.log(data);
            setModalBox();
            $('#modalPersonal').modal('show');
            function setModalBox() {
                $('#name').val(data.name);
                $('#lastname').val(data.lastname);
                $('#email').val(data.email);
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
        "password": $('#password').val(),
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
        type:'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url:'/saveclient/'+id,
        data: data,
        dataType: 'json',
        beforeSend: function(){
          $.LoadingOverlay("show");
         },
        }).done( function(data) {
          $.LoadingOverlay("hide");
        
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
      "password": $('#password').val(),
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
      type:'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      url:'/saveclient/'+id,
      data: data,
      dataType: 'json',
      beforeSend: function(){
        $.LoadingOverlay("show");
       },
      }).done( function(data) {
        $.LoadingOverlay("hide");
      
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

function openNewclientBank(id) {
  setModalBox();
  $('#modalBank').modal('show');
  function setModalBox() {
    $('#bankname').val('');
    $('#accid').val('');
    $('#account').val('');
    $('#accname').val('');
    $('#swift').val('');
    $('#iban').val('');
    $('#currency').val('');
    $('#country2').val('');
    $('#btnClusterB').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="saveNewBank('+id+')">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
   }
};

function saveNewBank(id){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

  var bankname = $('#bankname').val();
  var country2 = $('#country2').find(':selected').text();
  var accid = $('#accid').val();
  var account = $('#account').val();
  var accname = $('#accname').val();
  var swift = $('#swift').val();
  var iban = $('#iban').val();
  var currency = $('#currency').val();
  var data = {
    "bankname" : bankname,
    "country" : country2,
    "accid" : accid,
    "account" : account,
    "accname" : accname,
    "swift" : swift,
    "iban" : iban,
    "currency" : currency
  }
  $.ajax({
    url: '/savenewbank/'+id,
    method: "GET",
    contentType: 'application/json',
    data: data,
    dataType: 'json',
    beforeSend: function(){
      $.LoadingOverlay("show");
     },
    }).done( function(data) {
      $.LoadingOverlay("hide");
    $('#myModal').modal('hide');
    $('#nameb').html(bankname);
    $('#nameb').removeClass('g-color-red');
    $('#nameb').addClass('g-color-white');
    $('#accidb').html(accid);
    $('#accountb').html(account);
    $('#accnameb').html(accname);
    $('#swiftb').html(swift);
    $('#ibanb').html(iban);
    $('#currencyb').html(currency);
    $('#countryb').html(country2);
    console.log(country2);
    if(data.success == 1){
      Toast.fire({
          background: '#007bff',
          type: 'success',
          title: '<span style="color: #fff !important;">Bank details successfully saved!</span>'
      });
  } else {
      Toast.fire({
          background: '#dc3545',
          type: 'error',
          title: '<span style="color: #fff !important;">Somethig happend!</span>'
  });    
  }
  });
};

function openclientBank(id) {
  $.ajax({
      url: '/clientbank/'+id,
      method: "GET",
      contentType: 'application/json',
      beforeSend: function(){
        $.LoadingOverlay("show");
       },
      }).done( function(data) {
        $.LoadingOverlay("hide");
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

function saveBank(id){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
  var data = {
    "bankname" : $('#bankname').val(),
    "country" : $('#country2').val(),
    "accid" : $('#accid').val(),
    "account" : $('#account').val(),
    "accname" : $('#accname').val(),
    "swift" : $('#swift').val(),
    "iban" : $('#iban').val(),
    "currency" : $('#currency').val()
  }
  $.ajax({
    url: '/savebank/'+id,
    method: "GET",
    contentType: 'application/json',
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
          title: '<span style="color: #fff !important;">Bank details successfully updated!</span>'
      });
      $('#myModal').modal('hide');
  } else {
      Toast.fire({
          background: '#dc3545',
          type: 'error',
          title: '<span style="color: #fff !important;">Somethig happend!</span>'
  });    
  }
  });
};


