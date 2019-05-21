<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<form action="" method="post">
<div class="container">

	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<center><h3>login</h3>
				<div class="d-flex justify-content-end social_icon">
					
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="name" class="form-control" placeholder="username">
						
					</div>
					
					
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="reg.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="admin.php">Admin</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
</html>
<?php
include("conn.php");
session_start();

if(isset($_POST['submit']))
{
	$a=$_POST["name"];
	$selete="SELECT *FROM studentdata WHERE name='$a'";
	$da=mysqli_query($conn,$selete);
	
	if(mysqli_num_rows($da)>0)
	{
		echo "<script>alert('name is already exist!');</script>";
		
		//echo "name is already exist!";
		exit();
	}
	
		
	$selete="SELECT *FROM regformdata WHERE name='$a'";
	$da=mysqli_query($conn,$selete);
	if(mysqli_num_rows($da)==1)
	{
		
			//echo "suceess";
		header("location:feedback.php");
            $_SESSION['name']=$a;
		
	}
	else
	{ 
        echo mysqli_error($conn);
		echo "<script>alert('please register')</script>";
		echo "<script> location.href = 'reg.php' </script>";
	}

}

?>