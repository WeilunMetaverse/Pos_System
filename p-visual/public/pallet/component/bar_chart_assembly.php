<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 260px;
}
</style>
<!-- Resources -->
<!-- <script src="../../../library/am4/core1.js"></script>
<script src="../../../library/am4/charts.js"></script>
<script src="../../../library/am4/animate.js"></script> -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end


var chart = am4core.create("chartdiv", am4charts.XYChart);

var initializeData = new XMLHttpRequest();
var urlData = "../data/get-assembly-bar.php";
initializeData.open('GET', urlData);
// Track the state changes of the request.
initializeData.onreadystatechange = function () {
    var DONE = 4; // readyState 4 means the request is done.
    var OK = 200; // status 200 is a successful return.
    if (initializeData.readyState === DONE) {
        if (initializeData.status === OK) {
        // console.log(xhr.responseText); // 'This is the output.'
        data = initializeData.responseText;
        // console.log (data);
        } else {
        // console.log('Error: ' + xhr.status); // An error occurred during the request.
        }
    }       
};
var loadData;
initializeData.onload = function() {    
    
    var assemblyData = JSON.parse(this.responseText);
    // console.log(inspectionData);
    chart.data = assemblyData;
};
initializeData.send(null); 

// chart.data = [{
//  "country": "L1",
//  "visits": 59
// }, {
//  "country": "S1",
//  "visits": 60
// }, {
//  "country": "S2",
//  "visits": 60
// }, {
//  "country": "S3",
//  "visits": 48
// }, {
//  "country": "S4",
//  "visits": 27
// }, {
//  "country": "S5",
//  "visits": 51
// }, {
//  "country": "S6",
//  "visits": 50
// }, {
//  "country": "S7",
//  "visits": 51
// }, {
//  "country": "S8",
//  "visits": 50
// }, {
//  "country": "S9",
//  "visits": 28
// }, {
//  "country": "S10",
//  "visits": 54
// }, {
//  "country": "L2",
//  "visits": 40
// }];

chart.padding(20, 20, 20, 20);

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.title.text = "[bold]Lifter/Station";
categoryAxis.title.fill = am4core.color("#E9ECEF");
categoryAxis.dataFields.category = "station";
categoryAxis.renderer.minGridDistance = 30;
categoryAxis.renderer.inversed = false;
categoryAxis.renderer.grid.template.disabled = true;
categoryAxis.renderer.labels.template.fill = am4core.color("#E9ECEF");

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;
valueAxis.title.text = "[bold]Tact Time(s)";
valueAxis.title.fill = am4core.color("#E9ECEF");
valueAxis.extraMax = 0.1;
valueAxis.renderer.labels.template.fill = am4core.color("#E9ECEF");
//valueAxis.rangeChangeEasing = am4core.ease.linear;
//valueAxis.rangeChangeDuration = 1500;

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "station";
series.dataFields.valueY = "value";
series.tooltipText = "{valueY.value}"
series.columns.template.strokeOpacity = 0;
series.columns.template.column.cornerRadiusTopRight = 10;
series.columns.template.column.cornerRadiusTopLeft = 10;
//series.interpolationDuration = 1500;
//series.interpolationEasing = am4core.ease.linear;
var labelBullet = series.bullets.push(new am4charts.LabelBullet());
labelBullet.label.verticalCenter = "bottom";
labelBullet.label.fill = am4core.color("#E9ECEF");
labelBullet.label.dy = -10;
labelBullet.label.text = "{values.valueY.workingValue.formatNumber('#.')}";

chart.zoomOutButton.disabled = true;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
 return chart.colors.getIndex(target.dataItem.index);
});

setInterval(function () {
    // for reload whole data 
    // var initializeData = new XMLHttpRequest();
    // var urlData = "../data/get-inspection-bar.php";
    // initializeData.open('GET', urlData);
    // // Track the state changes of the request.
    // initializeData.onreadystatechange = function () {
    //     var DONE = 4; // readyState 4 means the request is done.
    //     var OK = 200; // status 200 is a successful return.
    //     if (initializeData.readyState === DONE) {
    //         if (initializeData.status === OK) {
    //         // console.log(xhr.responseText); // 'This is the output.'
    //         data = initializeData.responseText;
    //         // console.log (data);
    //         } else {
    //         // console.log('Error: ' + xhr.status); // An error occurred during the request.
    //         }
    //     }       
    // };
    // var loadData;
    // initializeData.onload = function() {    
    //     console.log(this.responseText);
    //     var inspectionData = JSON.parse(this.responseText);
    //     // console.log("onupdate"+ inspectionData);
    //     chart.data = inspectionData;
    // };
    // initializeData.send(null);

    am4core.array.each(chart.data, function (item) {
    // console.log(item);

    var updateData = new XMLHttpRequest();
    var urlData = "../data/update-assembly-bar.php?station="+item.station;
    updateData.open('GET', urlData);
    // Track the state changes of the request.
    updateData.onreadystatechange = function () {
        var DONE = 4; // readyState 4 means the request is done.
        var OK = 200; // status 200 is a successful return.
        if (updateData.readyState === DONE) {
            if (updateData.status === OK) {
            data = updateData.responseText;
            // console.log (data);
            } else {
            // console.log('Error: ' + xhr.status); // An error occurred during the request.
            }
        }       
    };
    var loadData;
    updateData.onload = function() {    
        // console.log(this.responseText.value);
        
        var assemblyData = JSON.parse(this.responseText);
        // assemblyData = this.responseText;
       
        // var assemblyData = this.responseText;
        // console.log(inspectionData.value);
        // chart.data = inspectionData;
        item.value = assemblyData.value;
        console.log("This is assembly data update:"+item.value);
        // item.value = Math.abs(item.value);
    };
    updateData.send(null);
    
    })
    chart.invalidateRawData();
}, 5000)

// categoryAxis.sortBySeries = series;

}); // end am4core.ready()
</script>

<!-- HTML -->
<h1 style="color:white; font-size: 23px;font-weight:bold;" align="center">Assembly</h1>
  <div class="row">
  <div id="chartdiv"></div>   
</div>
