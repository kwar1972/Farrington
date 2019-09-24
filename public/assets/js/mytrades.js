$(document).ready(function() {
  'use strict'
    settableTrades()
})




function settableTrades() {  
    $.ajax({
    'url': "/mytradelist",
    'method': "GET",
    'contentType': 'application/json',
    beforeSend: function(){
      $.LoadingOverlay("show");
     },
    }).done( function(data) {
      $.LoadingOverlay("hide");
      console.log(data);
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
                { "data": "price" , render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
                { mRender: function (data, type, row) {
                  var fee = row.fee+' %';
                  return  fee
                },
              },
                { "data": "total" , render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
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
                { "data": "deposit_at" },
                { "data": "purchased_at" },
                { mRender: function (data, type, row) {
                  var created = row.created_at.slice(0,10);
                  return created
                  } 
                },
                // { "data": "created_at" },
              ]
        });
    },
    )};


  
