<!DOCTYPE html>
<html>
<head>
    <title>amcharts</title>

<!-- Styles -->
<style>
#chartdiv {
    width   : 100%;
    height  : 500px;
}                                                                   
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

</head>
<body>

    <br /><br />

    <div class="container" style="width:900px;">
        <h2 align="center">Prueba para hacer en proyecto amcharts</h2>
        <h3 align="center">prueba</h3>
        <br /><br />
        <div id="chartdiv"></div>
    </div>

</body>
</html>




<!-- Chart code -->
<script>
var chartData = generateChartData();
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "light",
    "marginRight": 80,
    "autoMarginOffset": 20,
    "marginTop": 7,
    "dataProvider": chartData,
    "valueAxes": [{
        "axisAlpha": 0.2,
        "dashLength": 1,
        "position": "left"
    }],
    "mouseWheelZoomEnabled": true,
    "graphs": [{
        "id": "g1",
        "balloonText": "[[value]]",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "hideBulletsCount": 50,
        "title": "red line",
        "valueField": "visits",
        "useLineColorForBulletBorder": true,
        "balloon":{
            "drop":true
        }
    }],
    "chartScrollbar": {
        "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 40
    },
    "chartCursor": {
       "limitToGraph":"g1"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    }
});

chart.addListener("rendered", zoomChart);
zoomChart();

// this method is called when chart is first inited as we listen for "rendered" event
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
}


// generate some random data, quite different range

// generate some random data, quite different range
function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 5);
    var visits = 1200;
    for (var i = 0; i < 1000; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i);
        
        visits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);

        chartData.push({
            date: newDate,
            visits: visits
        });
    }
    return chartData;
}
</script>

<!-- HTML -->
<div id="chartdiv"></div>	