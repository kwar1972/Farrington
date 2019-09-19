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

//   /* Morris.js Charts */
//   // Sales chart
//   $.ajax({
//     url: "/test",
//     method: "GET",
//     dataType: 'json',
//     contentType:'application/json',
//     header:('Access-Control-Allow-Origin: *'),
//     success:function data(data,a,b,c) {
//       console.log(data);
//     var ret = [
//         { y: 'data', a: 100, b: 90 ,c:50},
//         { y: '2007', a: 75,  b: 65 ,c:50},
//         { y: '2008', a: 50,  b: 40 ,c:50},
//         { y: '2009', a: 75,  b: 65 ,c:50},
//         { y: '2010', a: 50,  b: 40 ,c:50},
//         { y: '2011', a: 75,  b: 65 ,c:50},
//         { y: '2012', a: 100, b: 90 ,c:50}
//       ];
     
//       if(a==false)
//       {
          
//       for(var i = 0; i < ret.length; i++)
//         delete ret[i].a;        
//       }
//       if(b==false)
//       {
         
//       for(var i = 0; i < ret.length; i++)
//         delete ret[i].b;        
//       }
//       if(c==false)
//       {
         
//       for(var i = 0; i < ret.length; i++)
//         delete ret[i].c;        
//       }    
//        return ret;
//   }
// });
  
//   var line = new Morris.Line({
//     element          : 'line-chart',
//     resize           : true,
//     data: data(),
//     xkey: 'y',
//     ykeys            : ['item1'],
//     ykeys: ['a', 'b','c'],
//     labels: ['High', 'Low','Close'],
//     colors: ['Red',"blue","green"],
//     // lineColors       : ['#17A2B8'],
//     lineWidth        : 2,
//     hideHover        : 'auto',
//     gridTextColor    : '#fff',
//     gridStrokeWidth  : 0.4,
//     pointSize        : 4,
//     pointStrokeColors: ['#efefef'],
//     gridLineColor    : '#efefef',
//     gridTextFamily   : 'Open Sans',
//     gridTextSize     : 10
//   });

 

  //Fix for charts under tabs
  
    // line.redraw()

});




function settableHoldings() {  
    $("#loaderDiv").show();
    $.ajax({
    'url': "/mytradelist",
    'method': "GET",
    'contentType': 'application/json',
    beforeSend: function(){
      
     
     },
     success:function(data) {
        $('#tableholdings').dataTable( {
              "aaData": data,
              "columnDefs": [
                {
                  "className": "text-center", "targets": "_all"
                },
              ],
              "columns": [
                { mRender: function (data, type, row) {
                  var ticker = '<span>' + row.get_ticker.ticker +'</span>';
                  return ticker;
                }},
                { "data": "amount" },
                { "data": "price" },
                { mRender: function (data, type, row) {
                  var val = 59;
                  return val;
                }},
                { mRender: function (data, type, row) {
                  var val = 59;
                  return val;
                }},
                { "data": "total" },
                { mRender: function (data, type, row) {
                  var amount = row.amount;
                  var sellprice = 59;
                  var tpos = (amount * sellprice);
                  return tpos;
                }},
                { mRender: function (data, type, row) {
                  var totp = row.total;
                  var amount = row.amount;
                  var sellprice = 59;
                  var tpos = (amount * sellprice);
                  var tearn = (tpos - totp);
                  return tearn;
                }},
                { mRender: function (data, type, row) {
                  var val = 0;
                  return val;
                }},
              ]
        });
    },
    complete:function(){
    }
    });
  };