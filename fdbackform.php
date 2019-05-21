<?php 
session_start();
 $name = $_SESSION['name'];
 ?>
<html>
<head>
<style>
.input{
	text-align:center;
}
</style>

</head>
<body>

<div class="imagebg"></div>
<div class="row " style="margin-top: 50px">
    <div class="col-md-6 col-md-offset-3 form-container">
   <center>     <h2 style="color:green">Feedback Form</h2> 
        <p>
           <tr> <td> <h2 style="color:red"> Please provide your feedback below:</h2>
        </p></center>
		<center>
		<table border="2px">
        <form role="form" method="post" id="reused_form">
		<tr><td><h4 style="color:blue">NAME:</h4></td></tr><tr> <td><input type="text"  name="name1" value="<?php echo $name;?>"></td></tr>
            <div class="row">
                <div class="col-sm-12 form-group">
                <tr> <td> <label><h3 style="color:blue">How do you rate your overall experience?</h3></label></td></tr>
                <p>
                  <label class="radio-inline">
                   <tr><td> <input type="radio" name="experience" id="radio_experience" value="bad" style="text-align:center" />
                    Bad</td></tr>
                    </label>

                    <label class="radio-inline">
                    <tr><td><input type="radio" name="experience" id="radio_experience" value="average" >
                    Average</td></tr>
                    </label>

                    <label class="radio-inline">
                   <tr><td><input type="radio" name="experience" id="radio_experience" value="good" >
                    Good </td></tr>
                    </label>
                </p>
                </div>
            </div>
			<div class="row">
                <div class="col-sm-12 form-group">
                
                <tr><td> <label><h3 style="color:blue">I had sufficient time to practice what I learned?</h3></label></td></tr>
                <p>
                  <label class="radio-inline">
                   <tr><td> <input type="radio" name="name" id="radio_experience" value="bad" >
                    Bad</td></tr>
                    </label>

                    <label class="radio-inline">
                    <tr><td><input type="radio" name="name" id="radio_experience" value="average" >
                    Average</td></tr>
                    </label>

                    <label class="radio-inline">
                   <tr><td><input type="radio" name="name" id="radio_experience" value="good" >
                    Good </td></tr>
                    </label>
                </p>
                </div>
            </div>
               
            
			<div class="row">
                
                <div class="col-sm-12 form-group">
                <tr><td> <label><h3 style="color:blue">I will apply the skills/ knowledge learned from this course?</h3></label></td></tr>
                <p>
                  <label class="radio-inline">
                   <tr><td> <input type="radio" name="email" id="radio_experience" value="bad" >
                    Bad</td></tr>
                    </label>

                    <label class="radio-inline">
                    <tr><td><input type="radio" name="email" id="radio_experience" value="average" >
                    Average</td></tr>
                    </label>

                    <label class="radio-inline">
                   <tr><td><input type="radio" name="email" id="radio_experience" value="good" >
                    Good </td></tr>
                    </label>
                </p>
                </div>
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="comments">
                      <tr><td><h3 style="color:blue">  Comments:</h1></td></tr></label>
                   <tr><td> <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" style="height:8em; width:100%;" maxlength="6000" rows="7"></textarea></td></tr>
                </div>
            </div>
            

                        <div class="row">
                <div class="col-sm-12 form-group">
                    <tr><td><center><button type="submit" class="btn btn-lg btn-warning btn-block" name="submit" >SEND </button></center></td></tr>
                </div>
            </div>

        </form>
		</table>
       <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Posted your feedback successfully!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

        </div>  
    </div>
</div>

</center>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit']))
	
{   
    $x=$_POST['name1'];
	$ex=$_POST['experience'];
	$co=$_POST['name'];
	$name=$_POST['email'];
	$email=$_POST['comments'];
	$insert="INSERT INTO same(name,experience,practice,knowledge,comments)VALUES('$x','$ex','$co','$name','$email')";
	$dinsert=mysqli_query($conn,$insert);
	if($dinsert)
	{
		echo "<script>alert('succeessfully submitted');</script>";
		echo "<script> location.href = '2login.php' </script>";
	}
	
	else
	{
		echo "fail";
	}
}
?>