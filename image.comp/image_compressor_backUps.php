

<head>
  <title>Image Compress</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="http://ff.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <style>
  body{
	  font-family: "Times New Roman", Times, serif;
	  
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
input{
	color: #000000;
	
}

  </style>
  </head>
<body>

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

  </body>
  

<?php include ( "./inc/footer.inc.php" ); ?>


