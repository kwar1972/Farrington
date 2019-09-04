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

  //-------------Create Modal

  function openCreateModal(){
    $('#btnCluster').html('<p class="btn btn-sm btn-outline-primary" data-dismiss="modal" onClick="save_formUC()">Save</p> <p class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancel</p>');
    $('#createModal').modal('show');
   
    $.ajax({
        url: 'transuser',
        type: 'get',
        contentType: 'application/json',
        success:function(response){
          console.log(response);
            var len = response.length;
            $("#client").empty();
            for( var i = 0; i<len; i++){
                var id = response[i]['id'];
                var name = response[i]['name'];
                var lastname = response[i]['lastname'];
                $("#client").append("<option value='"+id+"'>"+name+" "+lastname+"</option>");
            }
        }
    });

    $.ajax({
      url: 'transagent',
      type: 'get',
      contentType: 'application/json',
      success:function(response){
        console.log(response);
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
        console.log(response);
          var len = response.length;
          $("#ticker").empty();
          for( var i = 0; i<len; i++){
              var id = response[i]['id'];
              var ticker = response[i]['ticker'];
              $("#ticker").append("<option value='"+id+"'>"+ticker+"</option>");
          }
      }
    });
  };