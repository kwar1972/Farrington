$(document).ready(function() {
    settableTransactions();
  });
  
  function settableTransactions() {  
    $("#loaderDiv").show();
    $.ajax({
    'url': "transmanlist",
    'method': "GET",
    'contentType': 'application/json',
    }).done( function(data) {
      console.log(data);
        $('#tabletransactions').dataTable( {
              "aaData": data,
              "columnDefs": [
                {
                  "className": "text-center", "targets": "_all"
                },
              ],
              "columns": [
                { "data": "id" },
                { "data": "userid" },
                { "data": "agentid" },
                { "data": "tickerid" },
                { "data": "amount" },
                { "data": "price" },
                { "data": "total" },
                { mRender: function (data, type, row) {
                var enabledStatus = '<span class="badge badge-pill badge-primary">Pending</span>';
                var disabledStatus = '<span class="badge badge-pill badge-danger">Cancelled</span>';
                console.log(row.status);
                if(row.status == 1){
                  return  enabledStatus
                }else{
                  return  disabledStatus
                };
              },
             },
                { mRender: function (data, type, row) {
                    var linkEdit = '<div class="btn-group"><p class="btn btn-sm btn-primary font-weight-bold" onClick="open_viewModal(' + row.id + ');" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></p><p class="btn btn-sm btn-danger font-weight-bold" onClick="deleteconfirm(' + row.id + ');" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></p></div>';
                    return  linkEdit
                  },
                },
              ]
        });
        $('[data-toggle="tooltip"]').tooltip();   
    });
  };