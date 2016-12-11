
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.25gleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Serif|Titillium+Web' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

  <style>
 
.button {
      background-color: Transparent; 
    border: none;
    color: white;
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
	border: 2px solid #f5bf00;
	cursor:pointer;
    overflow: hidden;
}

body {
    background-image: url(images/1.jpg);
	color : #e3f1f0;
	background-repeat:no-repeat;
	     width: 100%;
    height: 100%;
	background-size: cover;

}

.jumbotron { 
    background-color: #565454; /* Orange */
    color: #58aee8;
	font-weight: bold;
	align: center;
}

.button2:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
         color: #ffffff;
         background-color: #f5bf00;
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
		border:1px solid #f5bf00;
	}
	.search_boxupper{
	position:absolute;
    top:13px;
	margin-left:200px;
	color: #000000;
	
	}
	
	img {
    width: 15%;
    height: 15%;
	background-position: center;
	
}

.login{
	position: absolute;
	height: 180px;
	width: 220px;
	text-align: left;
	top: 50%;
	right: 10px;
	border: 1px solid white;
	padding: 5px;
}

.index{

	float: left;
    margin: 5px;
    padding: 15px;
    width: 300px;
    height: 300px;
    border: 1px solid black;
}

#footer {
	background: black;
	width:100%;
	height:50px;
	position:absolute;
	text-align: center;
	bottom:0;
	left:0;
	opacity: 0.8;
}

</style>
  
</head>

<body>

<div class="container-fluid" style="color:#fff;height:auto; ">


	<img class="img-responsive" src="images/logo_howdy.png" id = "center" class="img" alt="logo_howdy" > 

</div><div class="container"><hr></div>

<!-- <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
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
          <li class="active"><a href="#myPage"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        <!-- <li><a href="#notification"><span class="glyphicon glyphicon-paperclip"> Notification</span></a></li>
       <!--  <li><a href="#messages"><span class="glyphicon glyphicon-pencil"> Messages</span></a></li>
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
</nav>  !-->

 
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



<div class="w3-container w3-orange">
<div class="login">
	<h4>Connect With People That Share Your Passion</h4>
	<button class="button button2" >Sign In!</button>
</div>


	<div class= "container" style="top: 50%; left:5%; position:absolute; text-align: center; margin: auto;
    padding: 10px;">
		<h2>Connect With People That Share Your Passion</h2>
		<h5>pool up a chair. Take a taste. <br/> Come join us. Life is so endlessly <br/> Delicious</h5><br/>
		<button class="button button2" >Join Today!</button>
		<br\><br\><br\><br\><br\><br\><br\><br\><br\>
  <h6>© Copyright 2016</h6>  

	</div>
</div>!-->


<div class="container" >
  <div class="row" style="top: 50%; position:absolute; margin: auto; padding: 10px;">
    <div class="col-sm-8" style="text-align:center;">
      <h2 style="color: white;">Connect With People That Share Your Passion</h2>
		<h5 style="color: white;">pool up a chair. Take a taste. <br/> Come join us. Life is so endlessly <br/> Delicious</h5><br/><br/><br/>
		<button class="button button2" onclick="window.location.href='signup.php'">Join Today..!</button>
    </div >
    <!--<div class="col-sm-4">
      
    </div>!-->
    <div class="col-sm-4" style="text-align:center;">
    	<br/><br/><br/><br/>
      <h4 style="color: white;">Connect With People That Share Your Passion</h4><br/><br/><br/>
	<button class="button button2" style="font-size: 12px;" onclick="window.location.href='signup.php'">Sign In..</button>
    </div>
  </div>
  <div id="footer">
		<h6>© Copyright 2016</h6>
		</div><!-- #footer -->
</div>
	
</body>
</html>
