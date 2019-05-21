
 <?php
session_start();
if($_SESSION['name']!=true)
{
	header("location:2login.php");
}
 $name=$_SESSION['name'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

 <html class="no-js" lang="en"> 

<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>




<title>Thank You</title>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style type="text/css">

body {
		background: #FFFFFF ;
		margin-left: 2  ;
		margin-top: 30px;
		font-style: normal;
		font-family: Trebuchet MS,Sans-Serif;}	
	 .surveytable {
		border-collapse: separate;
		background-color:#66CC00;}
	 .msgtext {
		font-size: 16px;
		color: #444444; }
	 .middlebox{
		margin-bottom:2em;
		margin-top:1em; }	
	 .bottombox{
		margin-top:2em; 
		margin-bottom:0;}	
	 .buttons{
		margin-top:2em;
		text-align:Left;}	
	.footer{
		margin-top:2em;
		margin-bottom:2em;
		font-size: 9px;
		text-align:center;}		
	a:link, a:visited {
		color: red;}
	a:hover, a:active {
		color: #3333FF;}	
	.shadow { -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);}  		
	.surveyform {
            max-width: 640px;
            margin: 0 auto;
        }
	.panel {
		padding: 0px;
		margin: auto; 
		border-color: #66CC00; 
		border-width: 20px; 
		background : #FFFFFF;	
		
		background-image:../writeablefolder/images/;
				
	}
	.logo { 
		border: none; 
		margin:0; 
		padding-top:2px;
		padding-left:2px;
		padding-right:2px;
		text-align: Center;
		position:relative;
		width:inherit;}
	.panel-footer {
		background : #FFFFFF;	
		border:0;
		padding-left:0px;
		padding-top
	}
	.panel-footer a {
		font-size:9pt;
	}	
	.Center {
		display:block;
		margin-left: auto;
    	margin-right: auto;
	}
	.LeftMargin {
		margin:15px;
	}
    .btn, .form-control {
    border-radius: 0;

</style>
    
<body onLoad="window.parent.scroll(0,0);"> 
  
    <div id="styleform" class="panel surveyform">
        <div id="header">
            
                <p class="logo"> 
                    
                        <img src="adityalogo.png" class="img-responsive center-block" alt="Logo /Wri">
                    </p>
             
        </div>
  	
    	<div class="middlebox" style="margin-left:2em;margin-right:2em;margin-bottom:0em;margin-top:0.5em;">
			
                    <span class="msgtext cent"> <br><center>
                      Thank you <?php
					   echo $name;
					   ?>
					   <br>
					   <a href="logout.php">logout</a>
					  </center></span> 
                 	   
        </div>
	
    <div class="panel-footer" style="text-align:center;">
        <a href="" onClick="window.open(this.href,'newwin');return false;"></a>   
    </div>
</div>


<script>
$(document).ready(function(){
    $(this).scrollTop(0);
});
</script>


