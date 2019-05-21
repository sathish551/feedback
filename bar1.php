<?php

$l="localhost";
$a="root";
$b="";
$db="graph";

	
$conn=mysqli_connect("$l","$a","","$db");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

catch(PDOException $x);
 {
	 die($x->getmessage());
	
 }

$same=$conn->prepare("SELECT * FROM bar");
$same->execute();
$json=[];
while($row=$same->fetch(PDO::FETCH_ASSOC))
{
	extract($row);
	$json[]=array('year'=>$year,'value'=>(int)$value);
}


?>

<!DOCTYPE html>
<html>
  <head>
    <title>BarGraph</title>
    <style type="text/css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>
	</head>
	<body>
	<div id="myfirstchart" style="height: 250px;"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <script>
  new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: <?php echo json_encode($json);
  ?>
  /* [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ] */,
 
  xkey: 'year',
  
  ykeys: ['value'],
  
  labels: ['Value']
});
</script>
  </body>