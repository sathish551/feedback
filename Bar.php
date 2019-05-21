

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BAR CHART</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.bundle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
                pointFormat: '{series1.name}: <b> {point.percentage: data}%</b>'
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
                    y:Strongly

                }, {
                    name: 'Agree',
                    y: str_num 
                }, {
                    name: 'Neutral',
                    y: Neutral
                }, {
                    name: 'Disagree',
                    y: Disagree
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
      $sql = $conn->query("SELECT COUNT(practice) FROM studentdata WHERE practice='StronglyAgree'");
      $row = $sql->fetch_row();
      $Strongly = $row[0];
  //echo "<tr><td>".$count."</td>";
?>
 
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(practice) FROM studentdata WHERE practice='Agree'");
      $row = $sql->fetch_row();
      $count = $row[0];
 // echo "<tr><td>".$count."</td>";
?>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(practice) FROM studentdata WHERE practice='Disagree'");
      $row = $sql->fetch_row();
      $Disagree = $row[0];
  //echo "<td>" .$count."</td>";
?>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(knowledge) FROM studentdata WHERE knowledge='Neutral'");
      $row = $sql->fetch_row();
      $Neutral = $row[0];
  //echo "<td>".$count."</td></tr>";
?>
<script>
var Strongly = <?php echo $Strongly?>;
var str_num = <?php echo $count?>;
var Disagree = <?php echo $Disagree?>;
var Neutral = <?php echo $Neutral?>;
</script>




	 