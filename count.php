
	
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(Name) FROM studentdata");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "Total numbers: " .$count;
?>
<br>
<?php 
   include("conn.php");
      $sql = $conn->query("SELECT COUNT(satisfied) FROM studentdata WHERE satisfied='StronglyAgree'");
      $row = $sql->fetch_row();
      $count = $row[0];
  echo "Total numbers: " .$count;
?>