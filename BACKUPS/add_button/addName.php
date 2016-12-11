<?php
include('dbConnect.inc.php');
if(isset($_POST['addSectionCount'])){
	$fileToUpload[]Arr=array_values(array_filter($_POST['fileToUpload[]']));
	$addCount=count($fileToUpload[]Arr);
	if($addCount > 0){
		$sql="insert into input_field(field_value) values ";
		for($i=0;$i<$addCount;$i++){
			$fileToUpload[]=mysql_real_escape_string($fileToUpload[]Arr[$i]);
			if($fileToUpload[]!=""){
				if($i==$addCount-1){
					$sql.="('".$fileToUpload[]."')";
				}else{
					$sql.="('".$fileToUpload[]."'),";
				}
			}
		}
		echo 'success|~|Data Added';
	}else{
		echo "error|~|Please enter your fileToUpload[]";
	}
}
?>