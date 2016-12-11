<!--HTML !-->
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
    background-color: #ffffff; 
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

<!--                                              PHP                                         !-->
<!--                                              PHP                                         !-->
<!--                                              PHP                                         !-->
<!--                                              PHP                                         !-->

<div class = "container">
<div class = "center">
<?php
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$h = strip_tags(@$_POST['height']);
$w = strip_tags(@$_POST['width']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo ("<p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p>");
    } else {
        echo ("<p>Sorry, there was an error uploading your file.</p>");
    }
}


$uploadimage = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$newname = $_FILES["fileToUpload"]["name"];

// Set the resize_image name
$resize_image = $target_dir.$newname; 
$actual_image = $target_dir.$newname;


// It gets the size of the image
list($width,$height) = getimagesize($uploadimage);


// It makes the new image width of 350
$newwidth = $w;

// It makes the new image height of 350
$newheight = $h;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ;

// It loads the images we use jpeg function you can use any function like imagecreatefromjpeg
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($resize_image);


// Resize the $thumb image.
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight,   
                 $width, $height);


// It then save the new image to the location specified by $resize_image variable

imagejpeg( $thumb, $resize_image, 100 ); 
?>


</div>
</div>






   <div >
  

<form action="download.php" method="post">
	   <div class="center">
          <!-- <button class="button button1" style="vertical-align:middle" name="submit" ></input><br/><br/> -->
		  <button class="button button1" value="Upload Image" name="submit">Download</button>
	   </div>
</form>
<a href="download.php?directtorar=uploads">Download All As Zip</a></br>
<a href="files/=<?php $newname ?>">Cool PHP Tutorial</a>


   </div>


  </body>
  

<?php include ( "./inc/footer.inc.php" ); ?>
