$(document).ready(function() {
    'use strict'
    settableHoldings();
 // Make the dashboard widgets sortable Using jquery UI
 $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.card-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });
    /* jQueryKnob */
  $('.knob').knob();

  /* Morris.js Charts */
  // Sales chart
  // $.ajax({
  //   url: "/test",
  //   method: "GET",
  //   dataType: 'json',
  //   contentType:'application/json',
  //   header:('Access-Control-Allow-Origin: *'),
  //   success:
  // function data(data,a,b,c) {
  //   var ret = [
  //       { y: '2006', a: 100, b: 90 ,c:50},
  //       { y: '2007', a: 75,  b: 65 ,c:50},
  //       { y: '2008', a: 50,  b: 40 ,c:50},
  //       { y: '2009', a: 75,  b: 65 ,c:50},
  //       { y: '2010', a: 50,  b: 40 ,c:50},
  //       { y: '2011', a: 75,  b: 65 ,c:50},
  //       { y: '2012', a: 100, b: 90 ,c:50}
  //     ];

  //     if(a == false)
  //     {

  //     for(var i = 0; i < ret.length; i++)
  //       delete ret[i].a;
  //     }
  //     if(b == false)
  //     {

  //     for(var i = 0; i < ret.length; i++)
  //       delete ret[i].b;
  //     }
  //     if(c == false)
  //     {

  //     for(var i = 0; i < ret.length; i++)
  //       delete ret[i].c;
  //     }
  //      return ret;
  //     }
// });

  // var line = new Morris.Line({
  //   element          : 'line-chart',
  //   resize           : true,
  //   data             : data(),
  //   xkey             : 'y',
  //   ykeys            : ['item1'],
  //   ykeys            : ['a', 'b','c'],
  //   labels           : ['High', 'Low','Close'],
  //   colors           : ['Red',"blue","green"],
  //   // lineColors       : ['#17A2B8'],
  //   lineWidth        : 2,
  //   hideHover        : 'auto',
  //   gridTextColor    : '#fff',
  //   gridStrokeWidth  : 0.4,
  //   pointSize        : 4,
  //   pointStrokeColors: ['#efefef'],
  //   gridLineColor    : '#efefef',
  //   gridTextFamily   : 'Open Sans',
  //   gridTextSize     : 10
  // });



  //Fix for charts under tabs

    // line.redraw()

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
                { "data": "tickerid" },
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