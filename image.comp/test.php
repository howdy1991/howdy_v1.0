<!DOCTYPE html>
<html lang="en">
<head>
   <title>Image Compress</title>
   
   //imp site http://www.w3schools.com/bootstrap/bootstrap_affix.asp
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Serif|Titillium+Web' rel='stylesheet' type='text/css'>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="http://ff.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <style>
 



body{

    height: 200px;
    background: #ffffff; /* For browsers that do not support gradients */    

}

.jumbotron { 
    background-color: #565454; /* Orange */
    color: #58aee8;
	font-weight: bold;
	align: center;
}

  #navbar_color{
	  background-color: #000000;
	  
	  
  }

 .navbar {
     font-family: "Georgia";
	
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
       margin-bottom: 0px;
      opacity: 0.9;
	  color: #ffffff;
    }
	 .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #5bf1ca !important;
	   background-color: #565454;
  }
  
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }

	footer {
      padding: 25px;
    }
	p{
	
    font-family: "Georgia";
    font-size: 20px;
	

	}
	input{
		color: #000000;
		
	}
	input:hover{
		border:1px solid #f5bf00;
	}
	.search_boxupper{
	position:absolute;
    top:13px;
	margin-left:200px;
	color: #ffffff;
	
	}
	span{
		font-size: 18px;
		
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


  body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
     
  }

  .affix ~ .container-fluid {
    top: 50px;
   
  }
  
  .margin{
	  margin-left: 10px;
	  
  }
  .center{
	  text-align: center;
	  
  }
  .form_text{
	  text-align: center;
	  font-size: 20px;
	  font-variant: small-caps
	  
  }
.color1{
	color: #008CBA;  
  }
form{
	  background-color: #d9534f;
	  border: 4px solid;
	 border-style: double;;
	 color: #fff;
  }
 
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
  
  #myPage {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #notification {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #messages {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  
  container-fluid{}
  background-color:#F44336;
  color:#fff;
 height:auto
  }

</style>
  
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid" >
  
 <h2 class="center color1"> <b>Welcome</b></h2>


</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <img class="img-responsive" src="images/logo_howdy.png" id = "center"  alt="logo_howdy" > 
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>  

<!-- <nav class="navbar navbar-fixed-top" id="navbar_color">
 <div class="nav navbar-nav">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar_color">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Howdy</a>
    </div>
	<div class = "search_boxupper">
    <form action = search.php method="GET" id="search">
	<span class="glyphicon glyphicon-search"></span>
	<input = "text" name="q" size="70" placeholder="Search Your Friend's Name"/>

	</form>
	</div>
	    <div class="collapse navbar-collapse" id="navbar_color">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        <li><a href="#notification"><span class="glyphicon glyphicon-paperclip"> Notification</span></a></li>
        <li><a href="#messages"><span class="glyphicon glyphicon-pencil"> Messages</span></a></li>
        <li></li>
        <!-- <li class="dropdown"> 
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </nav> !-->
		</li>
        
      </ul>
    </div>
	
<div class="jumbotron">
    <h2 class="center color1">Welcome to the Free <b>IMAGE COMPRESSOR</b></h2>
	
	<div class="container">
	<div class="center">
	
    <p>Download compressed image fast and easily.</p> 
	<p>Optimized images are better! They are more suitable for web pages, email attachments, or even storage on your disk.</p> 
	
	</div>
  </div>
  </div>
   <div class = "container">
   <div >
  
     <form action="upload_img.php" method="post" enctype="multipart/form-data">
        <p class = "form_text">Select Image To Upload:</p><hr />
	   <h1 class="margin">Your Image</h1>
	   <div class = "margin">
	
	   
          <input type="file" class="button" multiple="multiple"  name="fileToUpload" id="fileToUpload" accept="image/*" ></input><br/><br/>
		     Height: <input type="number" name="height" value=""><br>
Width: <input type="number" name="width" value=""><br>
	   </div><hr />
	   <div class="center">
          <!-- <button class="button button1" style="vertical-align:middle" name="submit" ></input><br/><br/> -->
		  <button class="button button1" value="Upload Image" name="submit">Upload</button>
	   </div>
      </form>

   </div>
</div>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">

  </table>  
</div>

  </body>
  </html>
  