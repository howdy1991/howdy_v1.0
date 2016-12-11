<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dynamically Add or Remove input fields in PHP JQuery | 91 Web Lessons</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script>
function addNameSection(){
	var addSectionCount=$("#addSectionCount").val();
	addSectionCount++;
	$("#addSectionCount").val(addSectionCount);
	$("#nameBoxWrap").append('<tr id="nameBox'+addSectionCount+'"><td>Name</td><td><input type="file" id="name'+addSectionCount+'" name="fileToUpload[]"></td><td>Page Nos</td><td><input type="text" id="name'+addSectionCount+'" name="pageNumbers[]"></td><td><input type="button"  class="button" value="Remove File" onclick=removeNameSection("'+addSectionCount+'")></td></tr>');
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
<body>
<div id="container">
    <!--top section start-->

    <div id="wrapper">
		<div class="wrap_box">
			<form action="uploadFile1.php" name="frmSection" id="frmSection" method="post" enctype="multipart/form-data">
				<table id="nameBoxWrap">
					<tr id="nameBox1">
						<td>Name</td>
						<td><input type="file" name="fileToUpload[]" id="fileToUpload"></td>
						<td>Page Nos</td>
						<td><input type="text" name="pageNumbers[]" id="pageNumbers"></td>
					</tr>
				</table>
				<input type="button" value="Add More Files" onclick="addNameSection()" class="button">
				<input type="submit" name="submit" value="Upload Files">
				<input type="hidden" id="addSectionCount" value="1" name="addSectionCount">
			</form>
		</div>
    </div>

    <!--fotter section start-->
    <div id="fotter">
         <p>
		      Copyright &copy; 2016 
              All rights reserved.
         </p>
    </div>
</div>
<script type="text/javascript">
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35007851-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script> 
</body>
</html>
