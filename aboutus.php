<?php
ob_start();
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
    '<script>alert("Fill The Entries");</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Parisharam Classes || Aboutus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  
  <!--Start of Google Translator script-->
  
  <h5 style="font-size:20px; font-family:'lobster two',cursive;">Get The Hindi Version Of This Site on Clicking Below</h5>
  <div id="google_translate_element"></div><script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
 <!--End of Google Translator Script--> 
  
  <style>
  .text .col-md-6
  {
  	letter-spacing:2px;
  	border-style: ridge;
  }
  .g .row
  {
  	border-style: ridge;
  	background-color:#4a81c6;
  }
   #menunav2 :hover
  {
    color:black;
  }
</style>
</head>
<body>

  <nav class="navbar navbar-inverse"  style="background-color:maroon;">
  	<ul class="nav navbar-nav">
  		<li><a href="#" class="glyphicon glyphicon-earphone"><big><font color="white">    <tt>+- 91-9839807984</tt></font></big></a></li>
    <li><a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession" class="glyphicon glyphicon-envelope"><big><font color="white">    <tt>infoparishramclass@gmail.com</tt></font></big></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="margin-top:10px;" type="submit" name="submit" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Admin Login</button>

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
          <input type="submit" name="submit" class="btn btn-success"  value="Submit"> 
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
</body>

<a href="logo1.jpg" target="_blank"><img class="img-responsive" src="logo1.jpg"></a>
<!--Menu Bar-->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><font size="5"><font color="#4a81c6" size="7">P</font><font color="black">ARISHARAM</font> <font color="#4a81c6" size="7">C</font><font color="black">LASSES</font></font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><big><font color="#4a81c6" size="4">Home</font></big></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#namit"><big><font color="#4a81c6" size="4">About Us</font></big></a>
        </li>
        <li><a href="singup.php"><big><font color="#4a81c6" size="4">Online Test</big></a></li></font>
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

<h1 class="bg-primary text-white" style="font-size:50px; font-family:'lobster two',cursive;">About Us</h1>
	</br>
</br>
<div class="container-fluid">
		<div class="row">
			<div class="text">
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<p><font color="#4a81c6" size="5">G</font>reatest attainments in life starts with a vision. Success is all about making your vision come to reality. At PARISHARAM CLASSES, we strongly believe in an ambition to impart quality education both in terms of educational skills and all round personality development. Being a pioneer IAS institute in Dehradun, we have the peculiarity of producing toppers with our quality and efficient teaching practices. We always stand beside those aspirants who have a strong yearning to be part of the most sought-after Civil Services and contribute the best to public.

With our novel & advanced techniques and to the point study material we help our students attain sure-shot success in these competitive exams. Whether the student is a brilliant or a mediocre, our expert faculties are always with them guiding and transforming students to administrators. With our expert guidance through cross-disciplinary approach and high-end educational programs, we help students who are from diverse backgrounds to face not only competitive examinations but also succeed in sculpting successfully their respective career paths.</p>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
	<a href="bank.jpg" target="_blank"><img src="bank.jpg" class="img-responsive"></a>
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-6">
<h2 style="font-size:30px; font-family:'lobster two',cursive;">How Parisharam classes is Beneficial to you for Preparation of  
Any Competition Exam</h2>
</br>
</br>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
  
	<div class="col-md-1"></div>

	<div class="col-md-6">
<ul>
	<li class="i">We are Providing good <b>Quality of Education to Our students</b></li>
	<li>Profesional And <b>Experience Faculties</b> We have</li>
	<li>Weekly test in proper manner as scheduled for Pre. and Mains.</li>
	<li>Concept building through facilitative style of teaching.</li>
	<li>We have scientifically analyzed the <b>SSC and BANK</b> trends for the last 6 months and worked out a coherent strategy on the nature of the preparation to be made.</li>
	<li>Our <b>Experienced faculty</b> has worked out a clear understanding on pattern of setting the questions and how to tackle them.</li>
	<li><b>Daily discussion</b> to enhance insight of the topic.</li>
	<li>We keep updating our course coverage plans to keep pace with the changing trends of the examination.</li>
	<li>We have lucid lectures evoking student’s interest in the various areas of knowledge and imparting a picture like view of the various themes to be studied.</li>
	<li>An <b>Exhaustive Sectional test</b> is a weekly activity to test the student’s understanding and expression in various areas</li>
</ul>
</div>
<div class="col-md-1"></div>
<div class="image">
<div class="col-md-4">
	<a href="i.jpg" target="_blank"><img src="i.jpg" class="img-responsive"></a>
</div>
</div>
</div>
</div></br>
</br>
</div>

<div class="container-fluid">
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4">
		<a href="dir.jpg" target="_blank"><img src="dir.jpg" class="img-responsive"></a>
	</div>
</br>
</br>

	<div class="col-md-7">
		<h1 style="font-size:30px; font-family:'lobster two',cursive;">"We believe in making a better tomorrow to live instead of thinking what has happened in the past."</h1></br>
		<h4><i>Devesh Kumar Verma</i></h4>
		<h4><i>Director of Parisharam Classes</i></h4>
    </div>
</div>
</div>
</nav>


<!--Footer-->

<div class="container-fluid">
 	<div class="row" style="background-color:#4a81c6;">
  <div class="col-md-4">
    <h4><font color="white">Design And Developed by Namit Singh (9616806369)</font></h4>
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
                  </div>