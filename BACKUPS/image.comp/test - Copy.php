<!DOCTYPE html>
<html lang="en">
<head>
   <title>Image Compress</title>
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
      z-index: 9999 !important;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

</style>
  
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
  <h1>Scrollspy & Affix Example</h1>
  <h3>Fixed navbar on scroll</h3>
  <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
  <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels, and the links in the navbar are automatically updated based on scroll position.</p>
</div>



<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
   <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#myPage"><span class="glyphicon glyphicon-home"> Home</span></a></li>
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
        !-->
		</li>
        
      </ul>
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


<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">

  </table>  
</div>
  </body>
  </html>
  