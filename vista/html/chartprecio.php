<!-- Styles -->
<style>
#chart2div {
  width   : 100%;
  height    : 350px;
  font-size : 10px;
}         
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chart2div", {
  "type": "serial",
  "theme": "light",
  "dataLoader": {
      "url": "chart/data2.php"
    },
  "gridAboveGraphs": true,
  "startDuration": 1,
  "mouseWheelZoomEnabled": true,
  "graphs": [ {
    "balloonText": "[[title]]<br>[[codigo_producto]]: <b>[[precio_entrada]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "title": "Precio entrada de:",
    "valueField": "precio_entrada"
  }],
      "chartScrollbar": {
        "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 20,
        "color":"#000100",
    },
    
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "codigo_producto",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
</script>

<!-- HTML -->
<div id="chart2div"></div> 