<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dynamically Add or Remove input fields in PHP JQuery | 91 Web Lessons</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>


  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
  
  <style>
  body {
      
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
	
	navbar{
		
		position: fixed;
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
	input{
		color: Black;
		font-weight: bold;
		
	}

  #search-friend {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  
  nav{
	  
	  position: fixed;
  }
  </style>




<script>
function addNameSection(){
	var addSectionCount=$("#addSectionCount").val();
	addSectionCount++;
	$("#addSectionCount").val(addSectionCount);
	$("#nameBoxWrap").append('<tr id="nameBox'+addSectionCount+'"><td>Name</td><td><input type="file" id="name'+addSectionCount+'" name="fileToUpload[]"></td><td>Page Nos:- </td><td><input type="text" id="name'+addSectionCount+'" name="pageNumbers[]"></td><td><input type="button"   value="Remove File" onclick=removeNameSection("'+addSectionCount+'") class="button button1"></td></tr>');
}

function removeNameSection(removeId){
	var addSectionCount=$("#addSectionCount").val();
	if(addSectionCount > 1){
		addSectionCount--;
		$("#addSectionCount").val(addSectionCount);
		$("#nameBox"+removeId).remove();
	}
}

function submitSection(){
	$.ajax({
		  type: "POST",
		  url: "uploadFile1.php",
		  data: $("#frmSection").serialize(),
		  cache: false,
		  success: function(result){
				var response=result.split("|~|");
				alert(response['1']);
				if(response['0']=="success"){
					var curpath = window.location.href;
					window.location = curpath;
				}
		  }
	  });
}
</script>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid" style="background-color:#565454;color:#fff;height:auto;">


	<img class="img-responsive" src="images/logo_howdy.png" id = "center" class="img" alt="logo_howdy" > 

</div>

<nav class="navbar navbar-inverse" style=""data-spy="affix" data-offset-top="197">
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
	</div>

<div class="container"><br/>
  
  <div class="well well-sm" id="date" style="text-align:center; color: #ff5050; background-color: #cceeff; font-weight: bold; font-size: 25px;"></div>
</div>

<div class="container">
  <div class="jumbotron">
  <footer class= "center">Welcome to the Free</footer>
     <h2 class="center color1"> <b>HOWDY PDF MERGE</b></h2>
        <footer class= "center">Compress PDF in one file.</footer> 
	<footer class= "center">You can set your pages as you want to merge.</footer> 
  </div>
  <div class="row">
    <div class="col-sm-8" >
      <div class="colorImageconverter">
  
         <div id="wrapper">
		<div class="wrap_box">
			<form action="uploadFile1.php" name="frmSection" id="frmSection" method="post" enctype="multipart/form-data">
				<table id="nameBoxWrap">
					<tr id="nameBox1">
						<td>Name &nbsp</td>
						<td><input type="file" name="fileToUpload[]" id="fileToUpload"></td>
						<td>Page Nos &nbsp</td>
						<td><input type="text" name="pageNumbers[]" id="pageNumbers"></td>
					</tr>
				</table>
				</br>
				<input type="button" value="Add More Files" onclick="addNameSection()" class="button button1">
				 
				 
				<input type="submit" name="submit" value="Upload Files" class="button button1">
				<input type="hidden" id="addSectionCount" value="1" name="addSectionCount">
			</form>
		</div>
    </div>

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
  
  
  <?php include ( "./chat.box/chat box_edited.php" ); ?>
  </div>
  </div>
</div>

<br/><br/><br/><br/>
<?php include ( "./inc/footer.inc.php" ); ?>
<script type="text/javascript">
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35007851-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

//greetings

var d = new Date();

n=d.getHours();

if(n<12){
document.getElementById("date").innerHTML = "Good Morning Sir &nbsp &#x1f60a;";
}else if(n>12 && n<17){
document.getElementById("date").innerHTML = "Good Afternoon Sir &nbsp &#x1f60a;";
}else if(n>17 && n<21){
document.getElementById("date").innerHTML = "Good Evening Sir &nbsp &#x1f60a;";
}else if(n>21 && n<24){
document.getElementById("date").innerHTML = "Good Night Sir &nbsp &#x1f60a;";
}


</script> 

</body>

</html>
