<!DOCTYPE html>
<html>
<head>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
<meta charset=utf-8 />
<title> Bar Chart</title>
<script>
/*
 * Play with this code and it'll update in the panel opposite.
 *
 * Why not try some of the options above?
 */
Morris.Bar({
  element: 'bar-example',
  data: [
    { y: 'StronglyAgree', a: $count, b: 90 },
    { y: 'Agree', a: 75,  b: 65 },
    { y: 'Neutral', a: 50,  b: 40 },
    { y: 'Disagree', a: 75,  b: 65 },
   
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>
</head>
<body>
  <div id="bar-example"></div>
  <?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(knowledge) FROM studentdata WHERE knowledge='StronglyAgree'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<tr><td>".$count."</td>";
?>
<br>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(knowledge) FROM studentdata WHERE knowledge='Agree'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<td>" .$count."</td>";
?>
<br>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(knowledge) FROM studentdata WHERE knowledge='Disagree'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<td>" .$count."</td>";
  
?>
<br>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(knowledge) FROM studentdata WHERE knowledge='Neutral'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "<td>".$count."</td></tr>";
?>
</div>
</body>
</html>