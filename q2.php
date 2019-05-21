<center>
<body style="background-color:pink">
<center><h1 style="color:blue">Student Feedback Details<h1></center> 
<table border="1">
<center><h3 style="color:green">Q2.I am satisfied that the learning objectives were met?<h3></center> 
<tr style="color:red"><th>StronglyAgree</th><th>Agree</th><th>Disagree<th>Neutral</th></tr>
</body>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='StronglyAgree'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<tr><td style='background-color:blue;color:red'>".$count."</td>";
?>
<br>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='Agree'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<td style='background-color:black;color:red'>" .$count."</td>";
?>
<br>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='Disagree'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<td style='background-color:green;color:red'>" .$count."</td>";
?>
<br>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='Neutral'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<td style='background-color:orange;color:red'>".$count."</td></tr>";
?>

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
                text: ''
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
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='StronglyAgree'");
      $row = $sql->fetch_row();
      $Strongly = $row[0];
  //echo "<tr><td>".$count."</td>";
?>
 
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='Agree'");
      $row = $sql->fetch_row();
      $count = $row[0];
 // echo "<tr><td>".$count."</td>";
?>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='Disagree'");
      $row = $sql->fetch_row();
      $Disagree = $row[0];
  //echo "<td>" .$count."</td>";
?>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='Neutral'");
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
