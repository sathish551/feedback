
 
  <body style="background-color:blue">
<center><table border="2">
<h1 style="color:green">login form</h1>
<form action="" method="post">
<tr><td>username</td><td><input type="text" name="name"/></td></tr> 


<tr><td colspan ="2"><center><input type="submit" name="submit"  onclick = "Enable()"/></center></td></tr>
</form>
</table>
</center>

</body>
<?php
include("conn.php");
session_start();

if(isset($_POST['submit']))
{
	$a=$_POST["name"];
	$selete="SELECT *FROM data WHERE name='$a'";
	$da=mysqli_query($conn,$selete);
	if(mysqli_num_rows($da)==1)
	{
		
			//echo "suceess";
		//header("location:fdbackform.php");
		header("location:ex2form.php");
            $_SESSION['name']=$a;
		
	}
	else
	{
		echo "<script>alert('incorrect Name')</script>";
	}

}

?>
