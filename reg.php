<?php
include("conn.php");
if(isset($_POST["submit"]))
{
	$a=$_POST["name"];
	$c=$_POST["email"];
	$d=$_POST["number"];
	$insert="INSERT INTO regformdata(name,email,phone)VALUES('$a','$c','$d')";
	$dinsert=mysqli_query($conn,$insert);
	if($dinsert)
	{
		echo "<center>"."<h1 style='color:green'>"."successfull registration"."</h1>"."<center>";
		
	}
	
	else
	{
		echo mysqli_error($conn);
	}
	
}

?>
<!--  <body style="background-color:white">
<center>
<h1 style="color:blue"> Registration Form</h1>
<table border="2">

    <form action="" method="post">
<tr><td style="color:green">user name </td><td><input type="text" name="name" required /></td></tr>
<tr><td style="color:blue">email</td><td><input  type="text" name="email"  required /></td></tr>
<tr><td style="color:red">phonenumber</td><td><input type="text" name="number" required /></td></tr>
<tr><td colspan="2"><center><input type="submit" name="submit"/></center></td></tr>
</form>
<tr><td colspan="5"><center><a href="2login.php"/>login</a></center></td></tr>
</table>
</center>
</body> --> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Registration Form</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .body {
		font-family: 'Varela Round', sans-serif;
	background-repeat: repeat-y;
		 background-image: url("m.gif");
		background-repeat: no-repeat;
        background-size: auto;
   
         background-attachment: fixed;
		background: #FFFFFF 
		background-repeat: no repeat;
		margin-left: 2px;
		margin-top: 30px;
		font-family: Trebuchet MS,Sans-Serif !important;
		font-size: Trebuchet MS,Sans-Serif;
    	opacity: 1;
    	transition: 0.4s opacity;
		}
	.modal-login {		
		color: #636363;
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
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
		background: #60c7c1;
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
		background: #60c7c1;
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
</style>
</head>
<body>
   
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="dp.png" alt="Avatar">
				</div>				
				<h4 class="modal-title"> Registration Form</h4>	
                
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="UserName" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email Id" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="number" placeholder="Phone Number" required="required">		
					</div>
					    
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">submit</button>
					</div>
					<div class="form-group">
						<center><a href="loginnew.php" name="login" >login</button></center>
			        </div>
					
				</form>
				
			</div>
			
			 <div class="modal-footer">
				<a href=""></a>
			</div> 
		</div>
	</div>
    
</body>
</html>