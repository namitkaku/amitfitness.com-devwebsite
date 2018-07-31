<?php
session_start();
$r=rand(1000,5000);
$_SESSION['r']=$r;
if(isset($_POST['submit']))
{ 
  $to=$_POST["email"];
  $subject="Your OTP is:";
  $body+=$r;
  $header='singhnamit49@gmail.com';
  
    if(mail($to,$subject,$body,$header))
    {
    echo "Sent Successfully";
    }
    else
    {
    echo "Failed";
    }  
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Parisharam Classes || Forgot Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <body>
  	<form method="post">
  	<div class="row">
  		<div class="col-md-4"></div>
  		<div class="col-md-4">
  			<h2>Change Your Passsword</h2></br>
  			<div class="form-group">
  			<label>Enter Email:</label>
  			<input type="email" name="email" class="form-control" placeholder="Enter email" required>
  			</div>
  			<div class="form-group">
  				<label>Enter Contact no:</label>
  				<input type="number" name="contact" class="form-control" placeholder="Enter Contact no" required>
  			</div>
  			<input type="submit" name="submit" class="btn btn-success" value="Submit">
  		</div>
  	</div>
  </form>
</body>
</head>
</html>