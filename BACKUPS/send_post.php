<?php
include ( "./inc/mysql_connect.inc.php" );
$post = $_POST ['post'];

if ($post != "") {

	
	$date_added = date("Y-m-d h:i:sa");
	$added_by = "drisha";
	$user_posted_to = "test";

	$sqlCommand = "INSERT INTO posts VALUES('','$post','$date_added','$added_by','$user_posted_to')";
	$query = mysql_query($sqlCommand) or die (mysql_error());
}
else
{
echo "You must enter something to publish.....";
}
?>