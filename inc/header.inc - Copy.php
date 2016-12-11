<?php include( "inc/mysql_connect.inc.php" ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Serif|Titillium+Web' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    background: red; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left, #59adea , #35ce94); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right, #59adea , #35ce94); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, #59adea , #35ce94); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right, #59adea , #35ce94); /* Standard syntax (must be last) */
	color : #e3f1f0;
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

 .navbar {
      margin-bottom: 0;
      border-radius: 0;
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
	#center {
    margin: auto;
   
    padding: 10px;
}
</style>
  
</head>
<body>
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