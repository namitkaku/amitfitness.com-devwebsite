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
    '<script>alert("Fill");</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Parisharam Classes || Welcomes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div id="google_translate_element"></div><script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element'); 
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
  <style>
  
  .jumb .jumbotron
  {
    background-image: url("s.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
  .jumbotron
  {
    background-color:#4a81c6;
  }
  .text-center .h1
  {
    letter-spacing: 4px;
  }
  .h .row
  {
    border-style: ridge;
    background-color:#4a81c6;
  }
  .a .col-md-4 img:hover
  {
    border-radius:30%;
  }
  .b .col-md-4 img:hover
  {
    border-radius:30%;
  }
  .c .col-md-4 img:hover
  {
    
    border-radius:30%;
  }
  .d .col-md-4 img:hover
  {
   
    border-radius:30%;
  }
  .e .col-md-4 img:hover
  {
    border-radius:30%;
  }
  .f .col-md-4 img:hover
  {
    
    border-radius:30%;
  }
  #menunav2 :hover
  {
    color:black;
  }
</style>
</head>
<body>
   
  <!--Header Information-->
  
  <div class="container-fluid">
    <div class="row">
  <nav class="navbar navbar-inverse" style="background-color:black;">
  	<ul class="nav navbar-nav">
  		<li><a href="#" class="glyphicon glyphicon-earphone"><big><font color="white">    <tt>+- 91-9839807984</tt></font></big></a></li>
    <li><a href="www.gmail.com" class="glyphicon glyphicon-envelope"><big><font color="white">    <tt>deveshkumarverma@gmail.com</tt></font></big></a></li>&nbsp;&nbsp;
    <button style="margin-top:10px;" type="button" data-toggle="modal" data-target="#myModal" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Admin Login</button>
  </ul>
  </nav>
</div>
</div>

    <!-- Modal -->

  <form method="post">
    <div class="container-fluid">
   <div class="row">
    <div class="col-md-7"></div>
      <div class="col-md-5">
  <div class="modal dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-fade" id="myModal" role="dialog">
    <div class="modal-title" style="font-size:40px; font-family:'lobster two',cursive;">Admin Login</h4>
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

<a href="logo1.jpg" target="_blank"><img  class="img-responsive" src="logo1.jpg"></a>


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
         <li><a href="#contactus"><big><font color="#4a81c6" size="4">Contact Us</big></a></li></font>
         <li><a href="download.php"><big><font color="#4a81c6" size="4">Old Question Papers</big></a></li></font>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> <big><font color="#4a81c6" size="4">Sign Up</big></a></li></font>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <big><font color="#4a81c6" size="4">Login</big></a></li>
      </ul></font>
    </div>
  </div>

<!--Jumbotron Box-->

<div class="jumb">
<div class="jumbotron" style="min-height:500px">
  <div class="text-center">
    <h1 style="font-size:50px; font-family:'lobster two',cursive;"><font color="white">Welcome To Parisharam Classes</h1></br></br>
    <h4 style="font-size:20px; font-family:'lobster two',cursive;">Come And Feel the Difference</font></h4> </br></br>
    <a href="#namit" class="btn btn-primary btn-lg">Read More</a>
  </div>
</div>
</div>
</nav>

<!--About Us  -->

<div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-6">
     <h1 style="font-size:50px; font-family:'lobster two',cursive;">Our Mission And vision</h1></br>
    </div>


    <div class="col-md-6">
      <center><h2 style="font-size:25px; font-family:'lobster two',cursive;">Our Mission</h2></center>
      <div class="alert alert-info">
        <p>Yes We know that our organisation is not very much old but we promise you that one day this organisation will become one of the finest organisation of Lakhimpur Kheri.
        The Reason is we are only focusing on depth knowledge of each and every subject.
        There are so many institutes where you get knowledge but only on outer surface but we are providing you the best knowledgein depth.</p>
      </div>
    </div>

    <div class="col-md-6">
      <center><h2 style="font-size:25px; font-family:'lobster two',cursive;">Our Vision</h2></center>
      <div class="alert alert-info">
        <p>Our vision is To Provide the Best quality Education to our Students so that One day they become success in their Lifes.
        we are seeing us in 2 years one of the best coaching institutes in Lakhimpur Kheri.
        To create the most trust worthy Competition Classes of the 21st century through support, to help individuals to explore their potential and achieve there galaxy.
      </p>
      </div>
    </div>
  </div>
</div>

<!--Our Courses-->
<div class="container">
  <div class="row">
    <div id="namit" class="col-md-4"></div>
    <div class="col-md-4">
      <h1 style="font-size:50px; font-family:'lobster two',cursive;">Our Courses</h1></br></br>
    </div>
  </div>

  <div  class="row">
    <div class="a">
  <div class="col-md-4">
      <div class="thumbnail">
        <a href="ssc.php" target="_blank">
          <img src="ssc.jpg" alt="opps">
          <div class="caption">
            <center><p><font color="#4a81c6" size="6"><a href="ssc.php">SSC</font></center></p></a>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="b">
  <div class="col-md-4">
      <div class="thumbnail">
        <a href="bank.php" target="_blank">
          <img src="bank.jpg" alt="opps">
          <div class="caption">
            <center><p><font color="#4a81c6" size="6"><a href="bank.php">BANK</font></center></p></a>
          </div>
        </a>
      </div>
    </div>
  </div>

<div class="c">
  <div class="col-md-4">
      <div class="thumbnail">
        <a href="l.jpg" target="_blank">
          <img src="l.jpg" alt="opps">
          <div class="caption">
            <center><p><font color="#4a81c6" size="6"><a href="ias.php">LEKHPAL</font></center></p></a>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


  <div  class="row">
    <div class="d">
  <div class="col-md-4">
      <div class="thumbnail">
        <a href="pcss.jpg" target="_blank">
          <img src="pcss.jpg" alt="opps">
          <div class="caption">
            <center><p><font color="#4a81c6" size="6"><a href="pcs.php">TET</font></center></p></a>
          </div>
        </a>
      </div>
    </div>
  </div>

<div class="e">
  <div class="col-md-4">
      <div class="thumbnail">
        <a href="ias.jpg" target="_blank">
          <img src="ias.jpg" alt="opps">
          <div class="caption">
            <center><p><font color="#4a81c6" size="6"><a href="railways.php">RAILWAYS</font></center></p></a>
          </div>
        </a>
      </div>
    </div>
  </div>

<div class="f">
  <div class="col-md-4">
      <div class="thumbnail">
        <a href="upp.jpg" target="_blank">
          <img src="upp.jpg" alt="opps">
          <div class="caption">
            <center><p><font color="#4a81c6" size="6"><a href="upp.php">UPP</font></center></p></a>
          </div>
        </a>
      </div>
  </div>
</div>
</div>
</div>
</br>

  <!--Contact Us-->
  <body>
  <form method="post">
  <div class="row">
    <div id="about us" class="col-md-4"></div>
    <div class="col-md-4">
      <h1 style="font-size:50px; font-family:'lobster two',cursive;">Contact Us</h1></br></br>
    </div>
  </div>

<!--Form For Contact Us-->

<form method="post">
<div class="container-fluid"> 
  <div class="row" style="background-color:lightgrey; padding: 1p5x" >
    <div class="hello">
      <div class="col-md-1"></div>
    <div id="contactus" class="col-md-4">
    
    <div class="form-group">
      <label>Enter Name:</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
    </div>

    <div class="form-group">
      <label>Enter Email id:</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
    </div>

    <div class="form-group">
      <label>Enter Contact No</label>
      <input type="number" name="contactno" id="contactno" class="form-control" placeholder="Enter Contact no" required>
    </div>

    <div class="form-group">
      <label>Your Message:</label>
      <textarea rows="3" cols="25" id="area" class="form-control" placeholder="Enter Message..." required></textarea>
    </div>

    <a href="submit.php" class="btn btn-primary">Submit</a></br></br>
  </div>
</div>
<div class="dev">
<div class="col-md-1"></div>
<div class="col-md-5">
  <h2 style="font-size:35px; font-family:'lobster two',cursive;">Address:</h2>
  <h3><b>Lakhimpur Kheri:</b>Near Yuvraj Dutt College Moti Nagar(Uttar Pradesh)</h3> 
  <h2 style="font-size:35px; font-family:'lobster two',cursive;">Contact No:
    <h4>+91- 9616806369</h4></br>
    <h4>+91- 9839807984</h4>
    <h3 style="font-size:35px; font-family:'lobster two',cursive;">Email Id:</h3>
    <h4>Deveshverma12345@gmail.com</h4>
</div>
</div>
</div>
</div>
</form>

<div class="row">
	<div class="container-fluid">
<div class="col-md-5"></div>
<div class="col-md-5">
	<h3 style="font-size:40px; font-family:'lobster two',cursive;">Navigate Us</h3>
</div>
</div>
</div>
<div class="row">
	<div class="container-fluid">
	<div class="col-md-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.6298804262424!2d80.77363571466225!3d27.943989682694486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399f3502b940ff95%3A0x7e71c7212f62a793!2sYDC+Rd%2C+Maharaj+Nagar%2C+Lakhimpur%2C+Uttar+Pradesh+262701!5e0!3m2!1sen!2sin!4v1529420773512" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</div>


<div class="container-fluid">
<div class="row" style="background-color:#4a81c6;">
  <div class="col-md-4">
    <h4><font color="white">Design And Developed by Namit Singh</font></h4>
  </div>
  <div class="col-md-7">
  <div style="font-size:15px;">
    <center>
   <ul id="menunav2" class="nav navbar-nav navbar-right">
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