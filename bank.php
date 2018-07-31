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
 <title>Bank || Welcomes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Start of Google Translator script-->
  
  <h5 style="font-size:20px; font-family:'lobster two',cursive;">Get The Hindi Version Of This Site on Clicking Below</h5>
  <div id="google_translate_element"></div><script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
 <!--End of Google Translator Script--> 

  </head>
  <style>
  .s h4
  {
    letter-spacing: 2px;
  }
  #menunav2 :hover
  {
    color:black;
  }
</style>
<body>
   
  <!--Header Information-->
  
  <div class="container-fluid">
    <div class="row">
  <nav class="navbar navbar-inverse" style="background-color:maroon;">
    <ul class="nav navbar-nav">
      <li><a href="#" class="glyphicon glyphicon-earphone"><big><font color="white">    <tt>+- 91-9839807984</tt></font></big></a></li>
    <li><a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession" class="glyphicon glyphicon-envelope"><big><font color="white">    <tt>infoparishramclass@gmail.com</tt></font></big></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="margin-top:10px;" type="submit" data-toggle="modal" data-target="#myModal" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Admin Login</button>
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
        <li><a href="signup.php"><big><font color="#4a81c6" size="4">Online Test</big></a></li></font>
        <li><a href="#"><big><font color="#4a81c6" size="4">Gallery</big></a></li></font>
         <li><a href="#contactus"><big><font color="#4a81c6" size="4">Contact Us</big></a></li></font>
         <li><a href="download.php"><big><font color="#4a81c6" size="4">Old Question Papers</big></a></li></font>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> <big><font color="#4a81c6" size="4">Sign Up</big></a></li></font>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <big><font color="#4a81c6" size="4">Login</big></a></li>
      </ul>
    </font>
    </div>
  </div>
</nav>

<img src="site.jpg" alt="opps" class="img-responsive">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
      <h1 style="font-size:40px; font-family:'lobster two',cursive;">Why To Choose Bank Exam</h1></br>
    </div>
 </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-info">
        <strong><font size="4">NOTE:</font></strong><b>&nbsp;Nowadays we know that in most of the competetive Exam scams are going on Yes our Government Is taking action
        but we know in our country each and everything takes time.
        But if i talk about Bank Exam then there is still fair selections  are going on each and every Year.</b>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
      <h1 style="font-size:40px; font-family:'lobster two',cursive;">About Bank Jobs</h1></br>
    </div>
 </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="s">
      <h4>Banking is the One of the fastest growing industry in India and they are considered as sunrise sector of Indian economy.
        More So government is foucsing on providing banking facilities in every village and town under its financial inclusion scheme.
        And hence more and more branches of the banks are being opened in every part of the Country.
        As the sector is growing very fast .it also needs manpower at varioous levels.
        Essentially the recruitment in bank sector happens at the following levels.
      </h4>
    </div>
  </div>
</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
      <h1 style="font-size:40px; font-family:'lobster two',cursive;">Respective Posts in Banks</h1>
    </div>
  </div>
</div>
</br>
</br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img src="bpo.png" alt="opps" class="img-responsive">
    </div>
    <div class="col-md-8">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">Who is a Bank PO?</h2>
      <p>A Bank PO is an Assistant Manager of Scale I in any of the Public Sector Bank in India. A Probationary Officer is a Junior Manager of Grade I. A lucrative career option and a white collar job, the position of Bank PO is considered to be a highly dignified position in India. The candidate selected after Bank PO Exam undergoes a probation period of 2 years during which he is trained on all domains required for smooth working of a Bank. The position of Bank PO is full of responsibilities and the selected candidate is expected to fulfill all those roles ensuring satisfaction of all the Bank’s customers.</p>
</div>
</div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img src="pco.jpg" height="300" width="400" alt="opps" class="img-responsive">
    </div>
    <div class="col-md-8">
  

      <h2 style="font-size:40px; font-family:'lobster two',cursive;">What is a Bank PO’s Role?</h2>
      <ul type="bullets">
        <li>During the probation period, a PO is trained in finance, accounting, marketing, billing as well as investment.</li>
        <li>After successful completion of the probation period, a PO is posted in any bank branch in the country as an Assistant Bank Manager. His primary work is to handle customer transactions, mainly passing a cheque, draft issuance, cash management etc.</li>
        <li>A Bank PO has to increase the bank business by managing cash flow, loans and mortgages and finances.</li>
        <li>He has to work as a Public Relations Officer, handle customer complaints and address various customer related issues such as discrepancies in accounts, rectification of undue charges etc.</li>
        <li>A Bank PO also has to perform functions such as planning, budgeting, marketing, loan processing and approval, investment management etc.</li>
        <li>A PO has to verify all the work done by a Bank Clerk. All the transactions of bank involve the role of Bank Clerk (maker) and Bank PO (checker).</li>
        <li>A bank PO issues ATM cards, cheque books, Demand Drafts etc.</li>


      </div>
</div>
</ul>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">Bank PO Recruitment Process</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
    <img src="por.png" alt="opps" class="img-responsive">
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">Bank PO Eligibility</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <ul type="bullets">
        <li>A candidate is required to be of 21-30 years of age while applying for Bank PO exam. Age relaxation of 5 years is given to candidates belonging to SC and ST. the candidates belonging to OBC categories are given an age relaxation of 3 years. The ex-servicemen and the candidates holding Jammu and Kashmir quota are also given an age relaxation of 5 years.</li>
        <li>The minimum educational qualificationrequired is that of a graduate from a designated University in any field with Mathematics as the subject opted in Class 12th.</li>
        <li>A candidate must also not hold any criminal record while applying for the post of PO. If he/she is found guilty, their candidature is likely to get cancelled.</li>
        <li>The candidate must also not have any pending loan repaymentto any Bank while applying for this post.</li>

      </ul>
     </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">IBPS Clerk Details 2018</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img src="ibps.jpg" alt="opps" height="300" width="400" class="img-responsive"></br>
      <img src="ibps2.jpg" alt="opps" class="img-responsive">
    </div>
    <div class="col-md-8">
      <h3>Exam Dates</h3>
      <p>IBPS Clerk is conducted by the Institute of Banking Personnel Selection to select candidates for the clerical cadre in multiple Government as well as Public Sector banks all over the country. The IBPS Clerk 2018 exam will be conducted on two levels- preliminary exam and mains. No interview process is required for the selection to the post of Clerk. Merit List is made based on the cumulative score of both Preliminary Examination as well as Mains Examination.</p></br>
      IBPS will release IBPS Clerk 2018 notification for IBPS Clerk CWE VII to fill vacancies in public sector banks. Online Registration for <b>IBPS Clerk 2018-19 will start from September 2018.</b> The official notification link for IBPS Clerk 2018 exam will be updated shortly here.</br></br>
      The dates for conducting IBPS Clerk 2018 Preliminary Examination is <b>8th, 9th, 15th and 16th December 2018</b> while that of Mains Examination is <b>20th January 2019.</b></br></br>
      <b>The registration process for IBPS Clerk CWE 2018 Exam is done online.</b> The link to online registration for this exam will be updated after the release of IBPS Clerk 2018 Official Notification. Keep visiting the page for more updates.</br>
      <h3>Vacancies</h3>
      <p>The number of vacancies have been reduced to 7883 as compared to the vacancy of last year that was around 22,711 as per the recent official notification released by IBPS. This means that the competition is going to increase and with less number of Banks participating in IBPS Clerk 2018 Exam, the selection will be really difficult.</p>
      <h3>Application Fee</h3>
      <p>The application fees for IBPS Clerk CWE 2018 exam is Rs. 600/- for candidates belonging to General Category. For candidates belonging to SC/ST/PWD category, the application fee is reduced to Rs. 100/-</p> 
    </div>
  </div>
</div>
</br>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">IBPS Clerk Exam Pattern 2018</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
     <div class="scrollableDiv">
                        <table cellpadding="0" cellspacing="0" border="1" width="100%" class="tableList">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name of Tests(Objective)</th>
                                    <th>No. of Questions</th>
                                    <th>Maximum Marks</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>English Language</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td rowspan="3">Composite time of 1 Hour</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Numerical Ability</td>
                                    <td>35</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Reasoning Ability</td>
                                    <td>35</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">Total</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
       </div>
   </div>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">IBPS Clerk Mains Exam Pattern 2018</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
       <div class="scrollableDiv">
                        <table cellpadding="0" cellspacing="0" border="1" width="100%" align="center">
                           <thead>
                <tr>
                <th>Serial No.</th>
                <th>Section</th>
                <th>No. of Questions</th>
                <th width="113" colspan="2" valign="top">Maximum Marks</th>
                <th width="89" valign="top">Duration</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>1.</td>
                <td>Reasoning    Ability &amp; Computer Aptitude</td>
                <td>50</td>
                <td width="113" colspan="2" valign="top">60</td>
                <td width="89" valign="top">45    minutes</td>
                </tr>
                <tr>
                <td>2.</td>
                <td>English    Language</td>
                <td>40</td>
                <td width="113" colspan="2" valign="top">40</td>

                <td width="89" valign="top">35    minutes</td>
                </tr>
                <tr>
                <td>3.</td>
                <td>Quantitative    Aptitude</td>
                <td>50</td>
                <td width="113" colspan="2" valign="top">50</td>
                <td width="89" valign="top">45    minutes</td>
                </tr>
                <tr>
                <td>4.</td>
                <td>General    Awareness( with special reference to banking industry)</td>
                <td>50</td>
                <td width="113" colspan="2" valign="top">50</td>
                <td width="89" valign="top">35    minutes</td>
                </tr>
                <tr>
                <td width="338" colspan="2" valign="top">Total</td>
                <td width="76" colspan="2" valign="top">190</td>
                <td width="113" valign="top">200</td>
                <td id="syllabus" width="89" valign="top">160 minutes</td>
                </tr>
                </tbody>
                        </table>
                    </div>

    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">IBPS Clerk Syllabus 2018</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <p>The basic subjects that a candidate needs to master are Quantitative Aptitude, Reasoning and English Language. The syllabus for both Preliminary Exam and the Mains Exam are different. A candidate is also required to be proficient in Computer and must have General Awareness knowledge specifically in the field of Banking.</p>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">IBPS Clerk Preparation</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <p><b>Important Topics to Prepare in each section:</b></p>

      <div class="scrollableDiv">
                        <table cellspacing="0" cellpadding="0" width="100%" border="1" class="tableList">
                            <thead>
                                <tr>
                                    <th>Sections Asked</th>
                                    <th>Key areas to focus on</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Quantitative Aptitude</td>
                                    <td>
                                        <p>Data Interpretation</p>
                                        <p>Quadratic Equation</p>
                                        <p>Number Series</p>
                                        <p>Mensuration</p>
                                        <p>Profit and Loss</p>
                                        <p>Simplification</p>
                                        <p>Ratio and Proportion</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reasoning</td>
                                    <td>
                                        <p>Seating Arrangement</p>
                                        <p>Coding-Decoding</p>
                                        <p>Mathematical Inequalities</p>
                                        <p>Blood Relation</p>
                                        <p>Syllogism</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>English Language</td>
                                    <td>
                                        <p>Reading Comprehension</p>
                                        <p>Cloze Test</p>
                                        <p>Sentence Correction</p>
                                        <p>Fill in the Blanks</p>
                                        <p>Spot the Error</p>
                                        <p>Para Jumbles</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Computer Applications</td>
                                    <td>
                                        <p>Computer Terms and Techniques</p>
                                        <p>Shortcuts and Full Forms</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>General Awareness</td>
                                    <td>
                                        <p>Current Affairs</p>
                                        <p>Banking Awareness</p>
                                        <p>Financial Awareness</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2 style="font-size:40px; font-family:'lobster two',cursive;">IBPS Clerk Eligibility</h2>
    </div>
  </div>
</div>
</br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-11">
      <p>A candidate must be 20-28 years old, must hold a minimum qualification of Bachelor’s from a recognized university and must not hold any criminal record while applying for IBPS Clerk CWE 2018 Exam.</p>
    </div>
  </div>
</div>


<div class="container-fluid">
<div class="row" style="background-color:#4a81c6;">
  <div class="col-md-4">
    <h4><font color="white">Design And Developed by Namit Singh (9616806369)</font></h4>
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
  </a>
  </html>