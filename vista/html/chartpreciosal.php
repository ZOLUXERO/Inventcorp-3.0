<!-- Styles -->
<style>
#chart4div {
  width   : 100%;
  height    : 350px;
  font-size : 11px;
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
var chart = AmCharts.makeChart( "chart4div", {
  "type": "serial",
  "theme": "light",
  "dataLoader": {
      "url": "chart/data3.php"
    },
  "gridAboveGraphs": true,
  "startDuration": 1,
  "mouseWheelZoomEnabled": true,
  "graphs": [ {
    "id":"g1",
    "balloonText": "[[title]]<br>[[codigo_producto]]: <b>[[precio_entrada]]</b>",
    "color":"#6E81DF",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
 
    "title": "Precio entrada de:",
    "valueField": "precio_entrada"
  },
  {
    "id":"g2",
    "balloonText": "[[title]]<br>[[codigo_producto]]: <b>[[precio_salida]]</b>",
    "fillColorsField": "color",
     "fillAlphas": 0.8,
      "lineAlpha": 0.2,
         "type": "column",
    "title": "Precio salida de:",
    "valueField": "precio_salida"
  }
   ],
      "chartScrollbar": {
        "autoGridCount": true,
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
<div id="chart4div"></div> 