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
  var line = new Morris.Line({
    element          : 'line-chart',
    resize           : true,
    data             : [
      { y: '2011 Q1', item1: 2666 },
      { y: '2011 Q2', item1: 2778 },
      { y: '2011 Q3', item1: 4912 },
      { y: '2011 Q4', item1: 3767 },
      { y: '2012 Q1', item1: 6810 },
      { y: '2012 Q2', item1: 5670 },
      { y: '2012 Q3', item1: 4820 },
      { y: '2012 Q4', item1: 15073 },
      { y: '2013 Q1', item1: 10687 },
      { y: '2013 Q2', item1: 8432 }
    ],
    xkey             : 'y',
    ykeys            : ['item1'],
    labels           : ['Item 1'],
    lineColors       : ['#17A2B8'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    gridTextSize     : 10
  });

 

  // Fix for charts under tabs
  
    line.redraw()

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
                { "data": "total" },
              ]
        });
    },
    complete:function(){
    }
    });
  };