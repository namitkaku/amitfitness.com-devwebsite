<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Parisharam classes ||Download Files</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div id="google_translate_element"></div><script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element'); 
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
  <style>
  #menunav2 :hover
  {
    color:black;
  }
</style>
  <body>

  <!--Header Information-->
  
  <nav class="navbar navbar-inverse" style="background-color:maroon">
    <ul class="nav navbar-nav">
      <li><a href="#" class="glyphicon glyphicon-earphone"><big><font color="white">    <tt>+- 91-9839807984</tt></font></big></a></li>
    <li><a href="www.gmail.com" class="glyphicon glyphicon-envelope"><big><font color="white">    <tt>deveshkumarverma@gmail.com</tt></font></big></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
          <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        <li><a href="www.amitfitness.com/quiz"><big><font color="#4a81c6" size="4">Online Test</big></a></li></font>
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
  <div class="row" style="background-color:pink;">
    <div class="col-md-3"></div>
    <div class="col-md-7">
  <h1 style="font-size:40px; font-family:'lobster two',cursive;"><font color="black">Download Previous Years Question Papers Below</font></h1> 
</div>
</div> 
</body>
</nav>
  </head>
  </html>


<?php
include_once('database.php');
$sql="select * from image";
$query=mysqli_query($con,$sql);
echo "<table class='table'><div class='container-fluid'><div class='table table-responsive'><table class='table table-bordered'>
<tr>
<th>Sno</th>
<th>Description Of File</th>
<th>Name</th>
<th>Download Here</th>
</tr>";
while($row=$query->fetch_assoc())
{
  echo "<tr>";
  //echo "<img src='".$row['image']."' height='150px' width='300px'>";
  //echo "<img src='uploads/".$row['image']."' width='300' height='300'/>";
  echo "<td>" . $row['sno'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" .$row['name']. "</td>";
  echo "<td> <a href='uploads/" .$row['name']. "'  class='btn btn-success btn-sm' target='_BLANK'>Download</a></td>";
  echo "</tr>";
}
echo "</table>"
?>

<?php
include_once('database.php');
if(isset($_POST['email'])&& isset($_POST['password']) && isset($_POST['contactno']))
{
  if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['contactno']))
  {
    $email=$_POST["email"];
    $password=$_POST["password"];
    $contactno=$_POST["contactno"];
    $sql="select * from admin where email='$email' and password='$password'";
    $query=mysqli_query($con,$sql) or die($con->error);
    if($query->num_rows==1)
    {
        header('location:upload.php');
    }
    else
    {
        echo '<script>alert("Login Invalid");</script>';
    }
  }
  else
  {
    '<script>alert("Fill");</script>';
  }
}
?>


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