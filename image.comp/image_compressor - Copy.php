<!DOCTYPE html>
<html>
<head>
   <title>Image Compress</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
  
  <style>
  body {
      position: relative; 
	  height: 200px;
    background: red; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left, #59adea , #35ce94); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right, #59adea , #35ce94); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, #59adea , #35ce94); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right, #59adea , #35ce94); /* Standard syntax (must be last) */
	color : #e3f1f0;
  }
    .margin{
	  margin-left: 10px;
	  
  }
  footer{
	  color: #000;
	  
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

img {
    width: 15%;
    height: 15%;
	background-position: center;
	
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
	
	.search_boxupper{
	position:absolute;
    top:13px;
	
	color: #000000;
	

	}
	
	
	//this is body
	  .margin{
	  margin-left: 10px;
	  
  }
  .center{
	  text-align: center;
	  
  }
  .form_text{
	  top: 10px;
 background-color: #d9534f;
 text-align: center;
	  
  }
.color1{
	color: #008CBA;  
  }
  .colorImageconverter{
	  background-color: #d9534f;
	   border: 4px solid;
	 border-style: double;;
	 color: #fff;
	  
  }

  //body end
  
  .button {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 16px 42px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	text-align: center;
}

.button1 {
    background-color: #d9534f; 
    color: black; 
    border: 2px solid #008CBA;
	font-weight: bold;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
	font-weight: bold;
}
#textsize{
	font-size: 1px;
	
}
	

  #search-friend {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid" style="background-color:#565454;color:#fff;height:auto;">


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
      <a class="navbar-brand" href="#">Howdy</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#myPage"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        <li><a href="#notification"><span class="glyphicon glyphicon-paperclip"> Notification</span></a></li>
        <li><a href="#messages"><span class="glyphicon glyphicon-pencil"> Messages</span></a></li>
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

 <div class="tab-content">
    <div id="search" class="tab-pane fade">
      <h3>Search</h3>
      	<form role="form" action = search.php method="GET" >
    <div class="form-group">
	<span class="glyphicon glyphicon-search" ></span>
      <label for="usr">Search:</label>
      <input type="text" class="form-control" id="usr">
    </div>
	</form>
    </div>  
<!--	<div class="jumbotron">
    <h2 class="center color1">Welcome to the Free <b>IMAGE COMPRESSOR</b></h2>
	
	<div class="container">
	<div class="center">
	
    <p>Download compressed image fast and easily.</p> 
	<p>Optimized images are better! They are more suitable for web pages, email attachments, or even storage on your disk.</p> 
	
	</div>
  </div>
  </div>
  !-->
  <div class="container">
  <div class="jumbotron">
  <footer class= "center">Welcome to the Free</footer>
     <h2 class="center color1"> <b>HOWDY IMAGE COMPRESSOR</b></h2>
        <footer class= "center">Download compressed image fast and easily.</footer> 
	<footer class= "center">Optimized images are better! They are more suitable for web pages, email attachments, or even storage on your disk.</footer> 
  </div>
  <div class="row">
    <div class="col-sm-4" >
      <div class="colorImageconverter">
  
     <form action="upload_img.php" method="post" enctype="multipart/form-data">
        <p class = "form_text">Select Image To Upload:</p><hr />
	   <h1 class="margin">Your Image</h1>
	   <div class = "margin">
	
	   
          <input type="file" class="button" multiple="multiple"  name="fileToUpload" id="fileToUpload" accept="image/*" ></input><br/><br/>
		      <input type="number" name="height" placeholder="Height" value=""></br></br>
			  <input type="number" name="width" placeholder="Weight" value=""><br>
	   </div><hr />
	   <div class="center">
          <!-- <button class="button button1" style="vertical-align:middle" name="submit" ></input><br/><br/> -->
		  <button class="button button1" value="Upload Image" name="submit">Upload</button><br/><br/>
	   </div>
      </form>

   </div>
    </div>
    <div class="col-sm-4" >
	       <div class="colorImageconverter">
  
     <form action="upload_img.php" method="post" enctype="multipart/form-data">
        <p class = "form_text">Select Image To Upload:</p><hr />
	   <h1 class="margin">Your Image</h1>
	   <div class = "margin">
	
	   
          <input type="file" class="button" multiple="multiple"  name="fileToUpload" id="fileToUpload" accept="image/*" ></input><br/><br/>
		      <input type="number" name="height" placeholder="Height" value=""></br></br>
			  <input type="number" name="width" placeholder="Weight" value=""><br>
	   </div><hr />
	   <div class="center">
          <!-- <button class="button button1" style="vertical-align:middle" name="submit" ></input><br/><br/> -->
		  <button class="button button1" value="Upload Image" name="submit">Upload</button><br/><br/>
	   </div>
      </form>

   </div>
    </div>
    <div class="col-sm-4" id="colsm4">
	<div class="colorImageconverter">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </div>
    </div>
  </div>
</div>
<!--
<div id="section1" class="container-fluid">
  <h1>Section 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section2" class="container-fluid">
  <h1>Section 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section3" class="container-fluid">
  <h1>Section 3</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section41" class="container-fluid">
  <h1>Section 4 Submenu 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section42" class="container-fluid">
  <h1>Section 4 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

!-->
<br/><br/><br/><br/>

<?php include ( "./inc/footer.inc.php" ); ?>
