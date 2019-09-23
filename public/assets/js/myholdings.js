$(document).ready(function() {
    // 'use strict'
    settableHoldings();
//  // Make the dashboard widgets sortable Using jquery UI
//  $('.connectedSortable').sortable({
//     placeholder         : 'sort-highlight',
//     connectWith         : '.connectedSortable',
//     handle              : '.card-header, .nav-tabs',
//     forcePlaceholderSize: true,
//     zIndex              : 999999
//   });
    /* jQueryKnob */
  // $('.knob').knob();
});




function settableHoldings() {
    $("#loaderDiv").show();
    $.ajax({
    'url': "/myholdingslist",
    'method': "GET",
    'contentType': 'application/json',
     success:function(data) {
       console.log(data);
        $('#tableholdings').dataTable( {
              "aaData": data,
              "columnDefs": [
                {
                  "className": "text-center", "targets": "_all"
                },
              ],
              "columns": [
                { "data": "get_ticker.ticker" },
                { "data": "amount" },
                { "data": "sellprice" },
                { "data": "total" },
                { "data": "totalpos" },
                { "data": "totalearn" },
                { "data": "totalsold" },
              ]
        });
    },
    complete:function(){
    }
    });
  };