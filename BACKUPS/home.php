
<?php 
include( "inc/mysql_connect.inc.php" ); 

session_start();
if(!isset($_SESSION["user_login"])){
	



}else{

//header("location:home.php");

}

?>


<?php 
if (isset($_GET['u'])) {
  $username = mysql_real_escape_string($_GET['u']);
  if (ctype_alnum($username)) {
  $check = mysql_query("SELECT username, first_name FROM users WHERE username='$username'");
  if (mysql_num_rows($check)===1) {
  $get = mysql_fetch_assoc($check);
  $username = $get['username'];
  $firstname = $get['first_name'];
}
else
{
echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost:81/social_network/findfriends/index.php\">";
exit();
}
}
}

//Check whether profile pic is uploaded or not for user
 $user_name = $_SESSION["user_login"];
$check_pic = mysql_query("SELECT profile_pic FROM users WHERE username = '$user_name'");
$get_pic_row = mysql_fetch_assoc($check_pic);
$profile_pic_db = $get_pic_row['profile_pic'];
if ($profile_pic_db == "")
{
	$profile_pic = "images/profile_pic.jpg";
}
else{
	$profile_pic = "userdata/profile_pics/".$profile_pic_db;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?></title>
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
		border:1px solid #f5bf00;
	}
.search_boxupper{
	float: right;
	position:absolute;
    top:13px;
	margin-left:400px;
	color: #000000;
	
	}
	
	img {
    width: 15%;
    height: 15%;
	background-position: center;
	
}
	#center {
    margin: auto;
   
    padding: 10px;
}
textHeader{
	
	background-color: #fff;
	weight: 190px;
	height: 15px;
	padding: 5px;
	border: 1px solid #fff;
	font-weight:600;

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


	<img class="img-responsive" src="images/logo_howdy.png" id = "center" class="img" alt="logo_howdy" > 

</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: #5bf1ca;"><?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?>
</a>

    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>

          <li><a href=<?php echo $_SESSION['user_login'];
?>><span class="glyphicon glyphicon-tasks"> Profile</span></a></li>
		   <li><a href="account_settings.php"><span class="glyphicon glyphicon-cog">Account-Settings</span></a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-lock"> Logout</span></a></li>
		 
		  
        <!-- <li><a href="#notification"><span class="glyphicon glyphicon-paperclip"> Notification</span></a></li>
       <!--  <li><a href="#messages"><span class="glyphicon glyphicon-pencil"> Messages</span></a></li>!-->
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
  </div>
</nav>  

 
<div class="container-fluid"><br/>
  
  <div class="well well-sm" id="date" style="text-align:center; color: #ff5050; background-color: #cceeff; font-weight: bold; font-size: 25px;"></div>
</div>


<div class="jumbotron" style="background: #00b377; height: 60%;">

<div class = "container">

<div class="textHeader">
<a target="_blank" href="<?php echo "$profile_pic"; ?>">
<img src="<?php echo "$profile_pic"; ?>" style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;"/><br/><p><?php
echo $_SESSION['user_login'];
?>'s Profile</p>
</a>
</div>
</div>
</div></br/><br/><br/>
</br/></br/></br/>
<div class = "container-fluid">
<div>Post form will go here...</div>
<div class="profilePosts">Your Posts will go here...</div>
<div class="profileLeftSideContent">Some content about this person's profile...</div>
<div class="textHeader"><?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?>
's Friends</div><br/>
<div class = "container-fluid" >
<div class="col-sm-3" style = "border: 1px solid #fff;border-style: single; box-shadow: 0 4px 8px 0 #7a7a52, 0 6px 20px 0 #c2c2a3;">

<h4 style = "text-align: center; color: #660029; text-weight: 2px;"><span class="glyphicon glyphicon-user"></span>&nbsp <?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?>'s Friends</h4>
<div style="border-radius: 8px;">
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="40"/>&nbsp;&nbsp;<br/><br/>
</div>
</div>
</div>
</div>
<br/>
<!--      <?php// include ( "./inc/footer.inc.php" ); ?>      !-->

<script type="text/javascript">
//greetings

var d = new Date();

n=d.getHours();

if(n<12){
document.getElementById("date").innerHTML = "Good Morning <?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?> &nbsp &#x1f60a;";
}else if(n>12 && n<17){
document.getElementById("date").innerHTML = "Good Afternoon <?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?> &nbsp &#x1f60a;";
}else if(n>17 && n<21){
document.getElementById("date").innerHTML = "Good Evening <?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?> &nbsp &#x1f60a;";
}else if(n>21 && n<24){
document.getElementById("date").innerHTML = "Good Night <?php
//include ("./inc/header.inc.php");
echo $_SESSION['user_login'];
?> &nbsp &#x1f60a;";
}
</script>

