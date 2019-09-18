$(document).ready(function() {
    settableTrades()
});



function settableTrades() {  
    $("#loaderDiv").show();
    $.ajax({
    'url': "/mytradelist",
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
                { "data": "userid" },
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
                { "data": "deposit_at" },
                { "data": "purchased_at" },
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
              ]
        });
           
    },
    complete:function(){
      
    }
    });
  };