<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<?php
$valid_formats = array("pdf");
$max_file_size = 102400000; //100 kb
$path = "uploads/"; // Upload directory
$cnt = 0;
$file_names = array();
$page_num = array();
print_r($_POST['pageNumbers']);
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to execute all files
	foreach ($_FILES['fileToUpload']['name'] as $f => $name) {
	    if ($_FILES['fileToUpload']['error'][$f] == 4) {
			echo "File error!!!<br>";
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['fileToUpload']['error'][$f] == 0) {	           
	        if ($_FILES['fileToUpload']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
				echo "File too large!<br>";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				echo "File not a valid format!<br>";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$f], $path.$name)) {
					$file_names[] = $path.$name;
					$page_num[] = $_POST['pageNumbers'][$cnt];
					$cnt++; // Number of successfully uploaded file
				}
	        }
	    }
	}
}
$arrlength = count($file_names);

for($x = 0; $x < $arrlength; $x++) {
    echo 'File name: '.$file_names[$x].' Page nos: '.$page_num[$x];;
    echo "<br>";
}
session_start();
$_SESSION['NamesOfFiles'] = $file_names;
$_SESSION['PageNumOfFiles'] = $page_num;
?>
<form action="sample.php" method="post" enctype="multipart/form-data">
    <input type="submit" value="Merge PDFs" name="submit">
</form>

</body>
</html>