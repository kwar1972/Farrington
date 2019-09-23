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
              { "data": "pricepaid" },
              { "data": "pricesell", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { "data": "totalpaid", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { "data": "totpos", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { "data": "totearn", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
              { "data": "totsold", render: $.fn.dataTable.render.number( ',', '.', 2, '$ ' )  },
            ]
      });
    },
    complete:function(){
    }
    });
  };