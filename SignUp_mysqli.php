<?php
include('connection_mysqli.php');
if(isset($_POST['btn']))
{
$first_name=trim($_POST['firstname']);
$last_name=trim($_POST['lastname']);
$dob=trim($_POST['dob']);
$email=trim($_POST['email']);
$gender=trim($_POST['gender']);
$city=trim($_POST['city']);
$state=trim($_POST['state']);
$address=trim($_POST['address']);
$number=trim($_POST['number']);
$password=trim($_POST['password']);
//Addr Removed
//Checking If the email exits,Check me daddy!
$do=mysqli_query($conn,"select * from users where EMAIL='$email'");
    $count=mysqli_num_rows($do);
//The insertion Part
if($count=='0'){
        $do1=mysqli_query($conn,"insert into users (firstname,lastname,dob,email,gender,city,state,address,number,password) Values ('$firstname','$lastname','$dob','$email','$gender','$city','$state','$address','$number','$password')"); //chess is a tablename in the Database 'dbtest'
//mail($email,Hi ,"Hello $name, You have been Sucessfully Registered");
$errmsg="Sucessfully Registered And Email Sent";
    }
else{
  $errmsg="Sory Email Id exits";
}
    if ( !$do1 ) {
$errmsg="Registration Failed,Try again";
die("Connection failed : " . mysql_error());
 }
}
?>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="wow.js"></script>
<title>SIGN-UP FORM</title>
	 <meta charset="utf-8">
	 <link href="style.css" rel="stylesheet" type="text/css"/>
	 <link href="animate.css" rel="stylesheet" type="text/css"/>
	 <link href="images/logo.jpg" rel="icon"/>
	 <img src="images/img13.jpg" style="height: 1000px; width: 100%;">


	 </head>


	<nav class="navbar navbar-inverse navbar-fixed-top wow fadeIn">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="new.html">TravTour</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="new.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li><a href="packages.html">Packages</a></li>
        <li><a href="gallery.html">GALLERY</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="form.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

		<form method="post">

			     <div style="height: 0px; width: 100%;">

                 <h1 style="position: absolute; color: black; margin-top: -900px; margin-left: 45%">SIGN-UP</h1>

                     <p style="position: absolute; margin-left: 250px; margin-top: -740px;">
                         <input type="text" name="first_name" placeholder="&nbsp; FIRST NAME * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 750px; margin-top: -740px;">
                         <input type="text" name="last_name" placeholder="&nbsp; LAST NAME * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 250px; margin-top: -650px;">
                         <input type="date" name="dob" style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 750px; margin-top: -650px;">
                         <input type="text" name="gender" placeholder="&nbsp; GENDER * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 250px; margin-top: -550px;">
                         <input type="text" name="city" placeholder="&nbsp; CITY * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 750px; margin-top: -550px;">
                         <input type="text" name="state" placeholder="&nbsp; STATE * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 250px; margin-top: -460px;">
                         <input type="text" name="address" placeholder="&nbsp; ADDRESS * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 750px; margin-top: -460px;">
                         <input type="text" name="number" placeholder="&nbsp; MOBILE NUMBER * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 250px; margin-top: -360px;">
                         <input type="email" name="email" placeholder="&nbsp; EMAIL ADDRESS * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>

                     <p style="position: absolute; margin-left: 750px; margin-top: -360px;">
                         <input type="password" name="password" placeholder="&nbsp; PASSWORD * " style="height: 30px; width: 350px; border-radius: 8px; font-size: 20px" required=""></p>
                      <div style="position: absolute ; height: 50px; width: 325px ; margin-left: 130px ; margin-top: -70px">




                 <p style="position: absolute; margin-left: 450px; margin-top: -30px; font-size: 22px">
                         <input type="submit" name="btn" onclick="popup()" value=" SUBMIT " style="border-radius: 5px;">

                 </p>


                 </form>






             </div>


    </body>
</html>
