<?php 
include( "inc/mysql_connect.inc.php" ); 

session_start();
if(!isset($_SESSION["user_login"])){



}else{

//header("location:home.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $username; ?>'s Profile</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Serif|Titillium+Web' rel='stylesheet' type='text/css'>
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
    background-color: #f3f3f3;
   
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
      color: #fff !important;
      background-color: #29292c !important;
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

</style>
  
</head>
<body>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid" style="background-color:#565454;color:#fff;height:auto;"><div class="container-fluid" style="    background: #0bb472;   
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
      <a class="navbar-brand" href="..//test/index.php" style="color: #5bf1ca;">Howdy</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        <!-- <li><a href="#notification"><span class="glyphicon glyphicon-paperclip"> Notification</span></a></li>
       <!--  <li><a href="#messages"><span class="glyphicon glyphicon-pencil"> Messages</span></a></li>!-->
		 <li>
		 		<div class = "search_boxupper">
		 <form action = search.php method="GET" id="search">
	         <span class="glyphicon glyphicon-search" style="color:#808080;" ><input = "text" name="q" size="35" placeholder="Search Your Friend's Name"/></span>
	

	      </form>
		
      </div>

	     </li>
        
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