<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<body>

<div class="container">
   <div class="table responsive">         
  <table class="table" id="container">
  <table class="table table-striped">                     

    <thead>
      <tr>
        <th>sno</th>
        <th>Name</th>
        <th>valuable</th>
        <th>satisfiedth</th>
        <th>practice</th>
        <th>knowledge</th>
        <th>materials</th>
      </tr>
    </thead>
    <tbody>
      
 <?php
include("conn.php");
 $select="SELECT *FROM studentdata";
     $query=mysqli_query($conn,$select);
	 $i=0;
	while($row=mysqli_fetch_array($query))
	{
		$i++;
	//print_r($que);
	
	 echo "<tr><td>".($i)."</td>";
	echo "<td>".($row['Name'])."</td>";
	echo "<td>".($row['valuable'])."</td>";
	echo "<td>".($row['satisfied'])."</td>";
	echo "<td>".($row['practice'])."</td>";
	echo "<td>".($row['knowledge'])."</td>";
	echo "<td>".($row['materials'])."</td></tr>";  
	 
	?>
	 

	<?php } ?> 
	
    </tbody>
  </table>
  </table>
</div>
</div>

</body>
</html>
