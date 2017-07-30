
<?php
//Created by AnkDos
session_start(); //starting the session
ob_start();
include 'connection_mysqli.php';    //Creating Connection
if(isset($_POST['button']))    //if the button is set/clicked(in simple word)
{
//taking the form values
    $email=trim($_POST['mail']);
     $password=strip_tags(trim($_POST['key']));

     //taking out the credentials from the database, of the email given in the form
     $do=mysqli_query($conn,"select id,password from users where email='$email'");
     $do1= mysqli_fetch_array($do);

     //Matching the form values to database values

     if($do1['password']== $password){   //if the password matches then proceed

         $_SESSION['ID']=$do1['id'];      //Assigning the Session id which would be use in other pages to load the current user data
         header("Location: xyz.php");    //Taking it to the home page
     }

     else{                                     //if credentials are wrong
         echo "wrong email or password";
     }

      if ( !$do ) {
  die("Failed to connect : " . mysql_error()); //throwing error if problem is in the Connectivity to MySQL
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
<title>LOGIN FORM</title>
	 <meta charset="utf-8">
	 <link href="style.css" rel="stylesheet" type="text/css"/>
	 <link href="images/logo.jpg" rel="icon"/>
	 <img src="images/img8.jpg" style="height: 1000px; width: 100%">

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


			     <div style="height: 0px; width: 100%;">


                 </div>
                     <form method="post" action="">
                     <h2 style="text-align: center ; margin-top: -900px ; border-bottom: 0.5px dashed black ; font-size: 28px">LOGIN</h2>
                     <br/>
                     <br/>
                     <input type="text" name="mail" placeholder="EMAIL*" style="height: 30px ; text-align: center ; width: 225px ; margin-left: 550px ; border-radius: 10px" required="">
                     <br/>
                     <br/>
                     <input type="text" name="key" placeholder="PASSWORD*" style="height: 30px ; text-align: center ; width: 225px ; margin-left: 550px ; border-radius: 10px" required="">
                     <br/>
                     <br/>
                     <input  name = "submit" type="submit" value="submit" style="margin-left: 610px">
                     </form>


                 <div style="position: absolute ; height: 50px; width: 325px ; margin-left: 500px ; margin-top: 10px">
                     <a href="forgotpassword.html"> <p style="text-align: center ; font-size: 30px ; margin-top: 5px" required="">Forgot Password ?</p></a>

                 </div>
				  </p>



                 </p>
 </body>
</html>
