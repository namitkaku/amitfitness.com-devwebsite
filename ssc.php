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
 <title>SSC || Welcomes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .ssc .col-md-4 img
{

border-radius: 20%;
}
.letter .col-md-6
{
	letter-spacing: 2px;
	border-style: ridge;
}
   #menunav2 :hover
  {
    color:black;
  }
</style>
</head>
<body>
 

 <nav class="navbar navbar-inverse"  style="background-color:black;">
  	<ul class="nav navbar-nav">
  		<li><a href="#" class="glyphicon glyphicon-earphone"><big><font color="white">    <tt>+- 91-9839807984</tt>&nbsp;&nbsp;&nbsp;</font></big></a></li>
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
          <input type="submit" name="submit" class="btn btn-primary"  value="Submit"> 
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
</nav>


		<h1 class="bg-primary text-white" style="font-size:30px; font-family:'lobster two',cursive;">SSC&nbsp;(Staff Selection Commission)</h1>
	</br>
</br>

<div class="container-fluid">
<div class="row">
	<div class="ssc">
	<div class="col-md-1"></div>
	<div class="col-md-4">
	<a href="ssc.png" alt="opps"><img src="ssc.png" height="600" width="500" class="img-responsive"></a>
	</div>
</div>
<div class="letter">
	<div class="col-md-1"></div>
<div class="col-md-6">
<h2 style="font-size:50px; font-family:'lobster two',cursive;"><font color="green">About ssc</font></h2>
<p>Candidates if you are aware with SSC Exams or appear in any of SSC Exam or in SSC CGL Exam then you definitely aware with it’s craze. In the year of 2016 more than 35 Lakh of candidates were applied for this exam and It is expected that in the year of 2017 more than 40 Lakh of candidates may fill SSC CGL 2017 Application Form. Every Year increasing of appearing of candidates making this exam most competitive in India. Other Exams like Railway Exam and IBPS Exam is other most craziest exam in India.

It is easy to judge the competitiveness of SSC CGL Exam by the fact of every passing year their is consistency increasing of Cut offs. If you see last five year cut off of CGL Exam is an increase more than 30%.</br>&nbsp;

Due to so much of competition this is very common to raise some questions like How much of time it requires for Preparation. And the answer is if you do serious study for six month with proper study material of SSC CGL Exam than it is enough to cracking this exam. But the most important thing during your Exam Preparation is understanding the whole SSC CGL Syllabus and choosing best book of SSC CGL Exam.

In previous year if you appeared for CGL Exam then you all are aware with SSC CGL Changes.</br> <br>&nbsp;They made changes in Exam Pattern and Scheme of SSC CGL exam and these changes will continue for SSC CGL 2017 Exam. And the best part of these changes are all the CGL Tiers exam will conduct through Online Mode and it also known as CBT (Computer Based Test). Through this change there is more transparency and no chance for paper leakage and also candidates can get their result very quickly.

On this page we are going to talk about the Detailed SSC CGL 2017 Syllabus for all Tiers like Tier-1, Tier-2 and Tier-3. With the topic wise weightage of each and every section.

</p>
</br>
</br>
</br>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h2  style="font-size:40px; font-family:'lobster two',cursive;"><font color="green">SSC CGL 2018 Tier-1 Syllabus.</gont></h2>
	</div>
	<div class="col-md-12">
		<div class="alert alert-danger">
		<p><font size="3">Candidates as you all know SSC CGL Tier-1 Exam is the first stage for all those candidates who have successfully submitted their Application form for <b>CGL 2018 Exam</b> They all have to appear for Tier-1 Stage Exam.</font></p>
		<ul>
			<li><font size="3">Tier-1Exam is conducted through online mode i.e (CBT) Computer Based Test</li>
			<li>Total No. of questions for Tier-1 Exam is 100, Each and every question carrying 2 marks. Means Total No. of questions are 100 and total weightage of 200 marks and total time duration for Tier-1 Exam is 1 hrs.</li>
			<li>Negative Marking is applicable of50 Marks for each and every wrong answer.</li></font>
		</ul>
		<p><b>Syllabus : </b><font size="3">Syllabus for CGL 2017 Tier-1 Exam which comprises with total of 100 questions with having 4 sections and each and every section contain 25 questions.</font></p>
		<ul>
			<li><font size="3">For General Intelligence and Reasoning Section (25 Questions/ 50 Marks)<font size="3"></li>
			<li><font size="3">For Quantitative Aptitude Section (25 Questions/ 50 Marks)</font></li>
			<li><font size="3">For English Section (25 Questions/ 50 Marks)</font></li>
			<li><font size="3">For General Awareness Section (25 Questions/ 50 Marks)</font></li>
		</ul>
	</div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<h2 style="font-size:40px; font-family:'lobster two',cursive;"><font color="green">Section Wise CGL 2018 Tier-1 Syllabus.</font></h2>
</div>
</div>
</div>

<div class="container-fluid">

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<div class="alert alert-warning">
    <p><b>In this section we will discuss about Part Wise or Section Wise syllabus for SSC CGL Tier-1 Exam, through this section you can get insights of topics that you need for preparing each and every section.</b></p></br></br>
    <p>First is English Section : In this section mostly questions are asked form Comprehension, Spotting Errors, Synonyms, Antonyms, Grammar etc.</p></br></br>
    <p>Few days ago an applicant filed an RTI to the official of SSC regarding Syllabus for English Section and SSC Replied with Topic Wise, distribution of marks for English Section which you can see through image which is jus below.</p></br>
    <p>Candidates through this above image for English Section. These are the topic which is mentioned in the reply of RTI.</p></br>
    <p>Second is General Intelligence and Reasoning Section : In this section you get all questions from Verbal and Non-Verbal Reasoning. The Best book for this section id RS Aggarwal. If you follow this book while preparing for General Intelligence and Reasoning you definitely get success in this section.</p></br>
    <p><b>The Detailed Syllabus for General Intelligence and Reasoning Section.</b></p></dbr>
    <p>Third is Quantitative Aptitude : This Section totally relates with Maths. And the level of this section is upto 10th (Metric) Standard only. So, if you are good in maths than this section is very easy for you.</p></br>
    <p>The all questions from this section belongs or designated to check the arithmetic aptitude of candidates and their knowledge regarding Numbers and it’s computation.</p></br>
    <p><b>The Detailed Syllabus for Quantitative Aptitude Section.</b></p></br>
    <p>Forth one is General Awareness Section : Candidates this section is very mysterious and for this section there is no any defined syllabus. Which means any question asked from any where. Generally those questions which belongs to Constitution, Polity, Current Affairs, General Science etc questions are asked in this section.</p></br>
    <p>Now we are going to share those topic which are most common for this section.</p></br>
    <ul>
    	<li><b>Static GK:</b> In this part questions are asked from History, Indian Polity, Culture, Geography, Scientific Research and Economics etc.</li>
    	<li><b>Science: </b>In this part questions are asked from General Science and its application which we using in our daily life. But most of questions are asked from Physics, Chemistry and Biology which is upto 10th level.</li>
    	<li><b>Crap:</b> In this part questions are asked from Current Events, Current Affairs, Person, Books and Authors, Places in News, Abbreviation etc.</li>
    </ul>
    <p><b>The Detailed Syllabus for General Intelligence and Reasoning Section.</b></p>
</div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h2 style="font-size:40px; font-family:'lobster two',cursive;"><font color="green">SSC CGL 2018 Tier-2 Syllabus.</font>
		</h2>
	</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-3">
		<img src="ssc3.jpg" height="600" width="400" alt="opps" class="img-responsive">
	</div>
	<div class="col-md-7">
		<p><font color="black">Candidates as you all know Tier-2 is the 2nd Phase for SSC CGL Exam which means hose candidates who have qualified their Tier-1 stage they all are shortlisted for CGL Tier-2 Exam. And Tier-2 is also an online mode exam (Computer Based test).</p></br>
		<p>hortlisting crieria for CGL Tier-2 is comprises of scoring minimum marks according to Category wise cut off marks. and it is made by the officials of commission. Which means you need to score maximum marks in your SSC CGL Tier-1 cut off marks.

SSC CGL Tier-2 Exam Pattern is comprises with 4 papers. And Paper-1 and Paper-2 is compulsory for all those candidates who get passed in their CGL Tier-1 Exam. And Paper-3 is for those candidates who have applied for Statistical Investigator Post and Paper-4 is for those candidates who have applied for C&AG and Asst. Audit Officer.</p></br>
<p><b>All 4 Papers have individual Duration of 2 hours.</b></p></br>
<ul>
	<li><b>Paper-1</b> (Quantitative Abilities): It comprises with 100 questions and each and every question carrying 2 marks and the overall weightage for this paper is 200 Marks and there is 0.50 Marks of negative marking is applicable for each and ever wrong answer.</li>
	<li><b>Paper-2 </b>(English & Comprehension): In this paper questions are asked from English Language and It comprises with 100 questions and each and every question carrying 2 marks and the overall weightage for this paper is 200 Marks and there is 0.25 Marks of negative marking is applicable for each and ever wrong answer.</li>
		<li><b>Paper-3:</b> It comprises with Statistics question and for only those candidates who have applied for the post of Statistical Investigator Grade II & Compiler. And total time duration for this paper is 2 hrs. And Comprises with 100 questions and carries 2 marks for each and every question. there is 0.50 Marks of negative marking is applicable for each and ever wrong answer.</li>
		<li><b>Paper-4: </b>It is like Paper-3 which means those applicants who have applied for C&AG and Asst. Audit Officer post they all have to appear for Paper-4 and This paper is comprises with 2 Parts.
		</li>
</ul>
</font>
</br>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 style="font-size:40px; font-family:'lobster two',cursive;">SSC CGL 2017 Tier-3 (Descriptive Paper) Syllabus</h2></br>
		</div>
	</div>
</div>

<div class="container-fluid">

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<p><font color="black">Those candidates who have passed their SSC CGL Tier-2 Stage they all will be called for Tier-3 Exam.

It is important to mention here that shortlisting criteria for Tier-3 is comprises marks which is obtained in Tier-1 and Tier-2. Those candidates who cross the mark of minimum qualifying marks in both Tiers and rank high in Merit List they all will be called for Tier-3 Exam.</p></br>
<p>In Previous years there is no any Tier-3 in CGL Exam, Instead of Tier-3 there were only Interview after Tier-2 Exam. But After government decision of with Interview for Group B, C and D Posts. From Now SSC decide to abolish Interview for CGL Exams.</p></br>
<p>Instead of Interview SSC added Descriptive Paper in English or Hindi to check the writing ability of candidates, from now which is must for all government jobs. In the year of 2016 SSC introduces the Descriptive Paper was introduced and conducted for SSC CGL 2016 Exam.</p></font>
</br>
</div>
		<div class="col-md-1"></div>
		<div class="col-md-3">
			<img src="ssc5.jpg" height="400" width="400" alt="opps">
		</div>
	</div>
</div>
</br>
</br>

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
                </div>