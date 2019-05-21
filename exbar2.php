
<?php
include("conn.php");
// mysql_connect("localhost","root","") or die("Error");
// mysql_select_db("try_pie_chart");

?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PIE CHART</title>
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
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'StronglyAgree',
                    y: 1
                }, {
                    name: 'Agree',
                    y: 9
                }, {
                    name: 'Neutral',
                    y: 3
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

<body>


<?php
 $result = mysql_query("SELECT COUNT(practice) AS total FROM studentdata WHERE practice='StronglyAgree'");

 $result2 = mysql_query("SELECT COUNT(practice) AS total FROM studentdata WHERE practice='Agree'");

 $result3 = mysql_query("SELECT COUNT(practice) AS total FROM studentdata WHERE practice='Neutral'");

 $result4 = mysql_query("SELECT COUNT(practice) AS total FROM studentdata WHERE practice='Disagree'");


?>

 <?php 
 $row=mysql_fetch_array($result);
 $row2=mysql_fetch_array($result2);
  $row3=mysql_fetch_array($result3);
 $row4=mysql_fetch_array($result4);


 ?>

  <table width="20%" border="1">
  <tr>
  <td width="8%">sno</td>
  <td width="64%">The written materials helped me understand the content of the class?</td>
  <td width="5%">TOTAL</td>
  </tr>
  <tr>
   <td>1</td>
   <td>StronglyAgree</td>
  <td><?php echo $row['total'];  ?></td>
  </tr>
  <tr>
   <td>2</td>
   <td>Agree</td>
   <td><?php echo $row2['total'];  ?></td>
    </tr>
    <tr>
   <td>3</td>
   <td>Neutral</td>
   <td><?php echo $row3['total'];  ?></td>
    </tr>
    <tr>
    <td>4</td>
    <td>Disagree</td>
    <td><?php echo $row4['total'];  ?></td>
    </tr>
   
    </table>



     </body>
     </html>
	 