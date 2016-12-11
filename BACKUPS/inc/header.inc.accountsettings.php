<?php 
include( "inc/mysql_connect.inc.php" ); 

session_start();
if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {
$user_name = " ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php
            
          if (!isset($_SESSION["user_login"])){
        echo "Sign in / Sign up";
          } else {

                echo "profile";

          }
          ?></title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Serif|Titillium+Web' rel='stylesheet' type='text/css'>
  
  <script src="js/main.js" type="text/javascript"></script>
  <style>
 
.button {
    background-color: #f5bf00; /* Green */
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	font-weight: bold;
}

input{
	
	color: #000000;

	
}
body{

    height: 200px;
    background-color: #DDDDDB;
   
	color : #3d507c;
}






.jumbotron { 
    background-color: #565454; /* Orange */
    color: #58aee8;
	font-weight: bold;
	align: center;
}

.button2:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

 .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
    font-size: 10px;
      margin-bottom: 0px;
	  opacity: 0.9;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
  #center {
    margin: auto;
    padding: 10px;
}


.navbar-nav li a:hover {
      color: #5bf1ca !important;
     background-color: #565454;
  }
  
  .navbar-nav li.active a {
      color: #3d5c5c !important;
      background-color: #5bf1ca !important;
  }
  span{
		font-size: 18px;

		
	}

	footer {
      padding: 25px;
    }
	p{
	
    font-family: "Georgia";
    font-size: 20px;
	

	}
	

	
  input:hover{
    border-bottom: 1px dashed #f5bf00;
     border-top: 1px dashed #f5bf00;
    // background-color: #f5bf00;
  }
	.search_boxupper{
		float: right;
	position:absolute;
    top:13px;
	margin-left:200px;
	color: #000000;
	
	}
	
	#center {
    margin: auto;
   
    padding: 10px;
}

.friend{
	
	
  background-color: #1f1f14;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding: 5px;
}

.postForm{
	
	weight: 580px;
	height: 80px;
	background-color: #3399ff;
	padding: 5px; 

}

.profilePosts{
	
	weight: 580px;
	height: 414px;
  background-color: transparent;
	padding: 5px;
	border-bottom: 1px solid #000;
	padding-bottom: 5px;
}

.profileLeftSideContent{

	weight: 194px;
	
	background-color: transperent;

	padding-right: 0px;
	padding-bottom: 5px;
	padding-left: 10px;
	padding-top: 5px;
	border-bottom: 1px solid #000;	
  text-align: justify;
}
#wrapper{
	margin-left: auto;
	margin-right: auto;
	width: 800px;
	height: device-height;
	border-left: 1px solid #ffffff;
	border-right: 1px solod #000000;
	padding-right: 10px;
	padding-left: 10px;
	overflow: auto;	
}


</style>
  
</head>
<body>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid" style="    background: #0bb472;   
    background: -webkit-linear-gradient(left top, #0bb472, #5a0d83); 
    background: -o-linear-gradient(bottom right, #0bb472, #5a0d83); 
    background: -moz-linear-gradient(bottom right, #0bb472, #5a0d83); 
    background: linear-gradient(to bottom right, #0bb472, #5a0d83); 
color:#fff;height:auto;">


	<img class="img-responsive" src="images/logo_howdy.png" id = "center" class="img" style="width: 15%; height: 15%; background-position: center;
" alt="logo_howdy" > 

</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: #5bf1ca;">Howdy</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <?php
          if (!isset($_SESSION["user_login"])){
         echo' <li class="active"><a href="signup.php">Signin/Signup</a></li> ';
          } else {
                $user_name = "";
                echo' <li><a href="http://localhost:81/social_network/findfriends/home.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>

          <li ><a href="'.$user_name.'"><span class="glyphicon glyphicon-tasks"> Profile</span></a></li>
                <li class="active"><a href="account_settings.php"><span class="glyphicon glyphicon-cog"> Account-Settings</span></a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-lock"> Logout</span></a></li> ';

          }
          ?>
		<ul style="float:right;list-style-type:none;">
		 <li>
		 		<div class = "search_boxupper">
		 <form action = search.php method="GET" id="search">
	         <span class="glyphicon glyphicon-search" style="color:#808080;" >&nbsp <input = "text" name="q" size="35" placeholder="Search Your Friend's Name"/></span>
	

	      </form>
		
      </div>

	     </li>
		 </ul>
        
        </ul>

	  
	   
    </div>
	

  </div>
</nav>  

 
<!--
<nav class="navbar navbar-inverse">



 <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
	 
    </div>
	<div class = "search_boxupper">
    <form action = search.php method="GET" id="search">
	<span class="glyphicon glyphicon-search" ></span>
	<input = "text" name="q" size="70" placeholder="Search Your Friend's Name"/>

	</form>
	</div>
</nav>


!-->