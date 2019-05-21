



<html>
<body style="background-color:pink">
<center><h1 style="color:blue">Student Feedback Details<h1></center> 
<table  class="table">
<div class="container">
  <thead>
<tr style="color:red"><th>sno</th><th>Name</th><th>valuable</th><th>satisfiedth<th>practice</th><th>knowledge</th><th>materials</th></tr>
 </thead>


 <?php
include("conn.php");
 $select="SELECT *FROM studentdata";
     $query=mysqli_query($conn,$select);
	 $i=0;
	while($row=mysqli_fetch_array($query))
	{
		$i++;
	//print_r($que);
	echo "<tr><td style='color:green'>".($i)."</td>";
	echo "<td style='color:blue'>".($row['Name'])."</td>";
	echo "<td style='color:green'>".($row['valuable'])."</td>";
	echo "<td style='color:green'>".($row['satisfied'])."</td>";
	echo "<td style='color:green'>".($row['practice'])."</td>";
	echo "<td style='color:green'>".($row['knowledge'])."</td>";
	echo "<td style='color:yellow'>".($row['materials'])."</td></tr>"; 
	 
	?> 
	 

	<?php } ?>
	
	
</table>
 </div>
 </body>
</html>


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<br>
<center>
<button data-toggle="collapse" data-target="#demo">feedback</button>
<html>
 <head>
<style type="text/css">
#content{ 
   
   display:none;
  
}
</style>
<script>
function date(){
document.getElementById("content").style.display="block";
}
</script>


</head>
<body>
<div id="demo" class="collapse">
<table border="2">

 <tr><td><h3 style='color:red'> Q1.The content of this  course was valuable?</h3></td></tr>
 
 <tr><td><center><button><a href="q1.php" name="admin" >feedback</a></button></center></td></tr>
 
 <tr><td><h3 style='color:red'> Q2.I am satisfied that the learning objectives were met?</h3></td></tr>
 <tr><td><center><button><a href="q2.php" name="admin" >feedback</a></button></center></td></tr>
 
 <tr><td><h3 style='color:red'> Q3.The written materials helped me understand the content of the class?</h3></td></tr>
 <tr><td><center><button><a href="q3.php" name="admin" >feedback</a></button></center></td></tr>
 
 <tr><td><h3 style='color:red'> Q4.I will apply the skills/ knowledge learned from this course?</h3></td></tr>
 <tr><td><center><button><a href="q4.php" name="admin" >feedback</a></button></center></td></tr>
 
 
 
</div>
 </table>
 </body>
 </html>
 <button><a href="logout.php">logout</a></button>
 </center>
	 