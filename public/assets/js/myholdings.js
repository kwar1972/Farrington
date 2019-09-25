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
    $.ajax({
    'url': "/myholdingslist",
    'method': "GET",
    'contentType': 'application/json',
    beforeSend: function(){
      $.LoadingOverlay("show");
     },
    }).done( function(data) {
      $.LoadingOverlay("hide");
      var arr = jQuery.makeArray( data );
      $('#tableholdings').dataTable( {
            "aaData": arr,
            "columnDefs": [
              {
                "className": "text-center", "targets": "_all"
              },
            ],
            "columns": [
              { "data": "ticker" },
              { "data": "amount" },
              { "data": "pricepaid", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { "data": "pricesell", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { "data": "totalpaid", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { "data": "totpos", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { mRender: function (data, type, row) {
                if(row.totearn == 0){
                  function currencyFormat(num) {
                    return '$ ' + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                  }
                  var number = row.totearn;
                  var number2 = currencyFormat(number);
                  var up = number2 +'<span class="g-color-lblue"> <i class="fas fa-equals"></i></span>';
                  return up
                }else if(row.totearn > 0){
                  function currencyFormat(num) {
                    return '$ ' + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                  }
                  var number = row.totearn;
                  var number2 = currencyFormat(number);
                  var up = number2 +'<span class="g-color-green"> <i class="fas fa-sort-amount-up"></i></span>';
                  return up
                }else{
                  function currencyFormat(number) {
                    return '$ ' + number.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                  }
                  var number = row.totearn;
                  var number2 = currencyFormat(number);
                  var down = number2 +'<span class="g-color-red"> <i class="fas fa-sort-amount-down"></i></span>' 
                  return down
                }
              }
               },
              { "data": "totsold", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
            ]
      });
    },
   
    )};
