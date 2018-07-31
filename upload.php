<?php
ob_start();
?>

<?php
include_once('database.php');
if(isset($_POST['submit']))
{
	if(!empty($_POST['submit']))
	{
	$rand = rand(1,9999)."_";
	$target="uploads/".$rand.basename($_FILES['uploadfile']['name']);
	$sno=$_POST['sno'];
  $name=$_POST['description']; 
	$image=$rand.$_FILES['uploadfile']['name'];
	
	$type=$_FILES['uploadfile']['type'];
	$size=$_FILES['uploadfile']['size'];
	$sql="insert into image(sno,description,name) values ('$sno','$name','$image')";
	$query=mysqli_query($con,$sql);
	  if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target))
	  echo '<script>alert("Uploaded Successfully!");</script>';
	  else
	  echo '<script>alert("Something went Wrong");</script>';
	  }
	  else 
	  echo '<script>alert("Select An Image");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Parisharam classes ||Upload Files</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #menunav2 :hover
  {
    color:black;
  }
</style>
  <body>

<!--Header Information-->
  
  <nav class="navbar navbar-inverse" style="background-color:black;">
  	<ul class="nav navbar-nav">
  		<li><a href="#" class="glyphicon glyphicon-earphone"><big><font color="white">    <tt>+- 91-9839807984</tt></font></big></a></li>
    <li><a href="www.gmail.com" class="glyphicon glyphicon-envelope"><big><font color="white">    <tt>infoparishramclass@gmail.com</tt></font></big></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="margin-top:10px;" type="submit" data-toggle="modal" data-target="#myModal" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Admin Login</button>

    <!-- Modal -->

  <form method="post">
    <div class="container-fluid">
   <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-5">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title" style="font-size:40px; font-family:'lobster two',cursive;">Admin Login</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Enter Email:</label>
            <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" id="name" name="email" class="form-control" placeholder="Enter EmailId" required> 
          </div>
        </div>
          <div class="form-group">
            <label>Enter Password:</label>
            <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="Password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
          </div>
        </div>
          <div class="form-group">
            <label>Enter Contact No:</label>
            <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="number" id="contactno" name="contactno" class="form-control" placeholder="Enter Contact No" required>
        </div>
      </div>
          <input type="submit" name="submit" class="btn btn-primary" value="Submit"> 
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</ul>
</nav>
</form>
</body

<a href="logo1.jpg" target="_blank"><img class="img-responsive" src="logo1.jpg"></a>

<!--Menu Bar-->

<nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><font size="5"><font color="#4a81c6" size="7">P</font><font color="black">ARISHARAM</font><font color="#4a81c6" size="7">C</font><font color="black">LASSES</font></font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><big><font color="#4a81c6" size="4">Home</font></big></a></li>
        <li class="dropdown">
          <a href="aboutus.php"><big><font color="#4a81c6" size="4">About Us</font></big></a>
        </li>
<li><a href="signup.php"><big><font color="#4a81c6" size="4">Online Test</big></a></li></font>
        <li><a href="#"><big><font color="#4a81c6" size="4">Gallery</big></a></li></font>
         <li><a href="index.php"><big><font color="#4a81c6" size="4">Contact Us</big></a></li></font>
         <li><a href="download.php"><big><font color="#4a81c6" size="4">Old Question Papers</big></a></li></font>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> <big><font color="#4a81c6" size="4">Sign Up</big></a></li></font>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <big><font color="#4a81c6" size="4">Login</big></a></li>
      </ul></font>
    </div>
  </div>
</nav>



<form method="POST" enctype="multipart/form-data">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-1"></div>
    		<div class="col-md-4">
    			<h1 style="font-size:40px; font-family:'lobster two',cursive;">Upload Old Papers</h1></br>
    		<div class="form-group">
    			<label>Enter Sno:</label>
                <input type="number" class="form-control" name="sno" placeholder="Enter Sno" required>
            </div>
            <div class="form-group">
            	<label>Enter Description:</label>
                <textarea rows="4" cols="25" name="description" class="form-control" placeholder="Enter Description of File..." required></textarea>
            </div>
            <div class="form-group">
            	<label>Select the File To Upload:</label>
	            <input type="file" class="btn btn-default" name="uploadfile"required>
	        </div>
	        <input type="submit" name="submit" class="btn btn-primary" value="submit">
</div>
</form>
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<h1>Delete Old Papers</h1>
			<?php
include_once('database.php');
?>
<table border="1">
<tr>
<th>sno</th>
<th>Description</th>
<th>Name</th>
<th>Delete File</th>
</tr>
<?php
$sql1="select * from image";
$query1=mysqli_query($con,$sql1);
while($row=$query1->fetch_assoc())
{
?>
	<tr>
	<td><?php echo $row['sno'];?></td> 
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><a href="delete.php?sno=<?php  echo  $row['sno'];?>"><img src="delete.jpg" width="30" height="30"></a></td>
</tr>
<?php
}
?>
</table>
		
		</div>
	</div>
</div>


<div class="container-fluid">
<div class="row" style="background-color:#4a81c6;">
  <div class="col-md-4">
    <h4><font color="white">Design And Developed by Namit Singh</font></h4>
  </div>
  <div class="col-md-7">
  <div style="font-size:18px;">
    <center>
   <ul id="menunav2" class="nav navbar-nav navbar-right" style="background-color:transparent">
    <li><a href="aboutus.php"><font color="white">About Us</font></a></li>
    <li><a  href="#"><font color="white">Student Area</a></font></li>
    <li><a href="index.php"><font color="white">Contact Us</a></font></li>
    <li><a href="index.php"><font color="white">Home</a></font></li>
        </ul>
      </center> 
    </div> 
  </div>
    </body>
    </form> 
