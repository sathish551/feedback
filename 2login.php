
  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>loginform</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {		
		color: #636363;
		width: 350px;
		
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
		background: #ecf0f1;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
        justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		color: #999;
	}		
	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: pink;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-login .avatar img {
		width: 100%;
	}
	.modal-login.modal-dialog {
		margin-top: 80px;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
		background: green;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #45aba6;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
	body {
		 background-image: url("img.jpg");
		
 
         background-attachment: fixed;
		background: #FFFFFF 
		background-repeat: repeat;
		margin-left: 2px;
		margin-top: 30px;
		font-family: Trebuchet MS,Sans-Serif !important;
		font-size: Trebuchet MS,Sans-Serif;
    	opacity: 1;
    	transition: 0.4s opacity;
		}
		</style>
</style>
</head>
<body style="background: url('home.jpg')";>

	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="dp.png" alt="Avatar">
				</div>				
				<h4 class="modal-title"> Login </h4>	
                
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Username" required="required"/>		
					</div>
					<!-- <div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>    -->  
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="submit">Login</button>
					</div>
					<div class="form-group">
						<center><button><a href="admin.php" name="admin" >Admin</button></center>
			        </div>
				</form>
			</div>
			 <div class="modal-footer">
				<a href="#"></a>
			</div> 
		</div>
	</div>
     
</body>
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