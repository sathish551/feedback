


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BAR CHART</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<script>
	 $(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'bar'
            },
            title: {
                text: 'Q3.The written materials helped me understand the content of the class?'
            },
            tooltip: {
                pointFormat: '{series1.name}: <b> {point.percentage:1f}%</b>'
            },
            plotOptions: {
                bar: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'feedback',
                colorByPoint: true,
                data: [{
                    name: 'StronglyAgree',
                    y: 1
                }, {
                    name: 'Agree',
                    y: 8
                }, {
                    name: 'Neutral',
                    y: 5
                }, {
                    name: 'Disagree',
                    y: 1
                }]
            }]
        });
    });
});
 </script>
</head>


<body style="background-color:pink">


<?php
include("conn.php");
 $result = mysql_query("SELECT COUNT(*) AS total FROM studentdata WHERE practice='StronglyAgree'") or die ("");

 $result2 = mysql_query("SELECT COUNT(*) AS total FROM studentdata WHERE practice='Agree'") or die ("Error!");

 $result3 = mysql_query("SELECT COUNT(*) AS total FROM studentdata WHERE practice='Neutral'") or die ("Error!");

 $result4 = mysql_query("SELECT COUNT(*) AS total FROM studentdata WHERE practice='Disagree'") or die ("Error!");


 $row=mysql_fetch_array($result);
 $row2=mysql_fetch_array($result2);
  $row3=mysql_fetch_array($result3);
 $row4=mysql_fetch_array($result4);
 ?>

	 