<?php include ("inc/header.inc.php");
if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {

   		die("<div class = 'container'><h2>You Must Be Logged In First....!!</h2></div>");
}
?>
<?php
// Find friend requests
//echo $user_name;
$friendrequests = mysql_query("SELECT * FROM friend_requests where user_to='$user_name'");
$numrows = mysql_num_rows($friendrequests);
//echo $numrows;
if ($numrows == 0){
	echo "You have no friend requests at this time";
	$user_from = "";
}
else{
	while ($get_row = mysql_fetch_assoc($friendrequests)){
		$id  = $get_row['id'];
		$user_to = $get_row['user_to'];
		$user_from = $get_row['user_from'];
		echo ''.$user_from.'wants to be friends '.' <br />';

?>
<?php
if (isset($_POST['acceptrequest'.$user_from])){
	// Get friend for logged in user
	$add_friend_check = mysql_query("SELECT friend_array from users where username='$user_name'");
	$get_friend_row = mysql_fetch_assoc($add_friend_check);
	$friend_array = $get_friend_row['friend_array'];
	$friendArray_explode = explode(",",$friend_array);
	$friendArray_count = count($friendArray_explode);
	//echo $friendArray_count;
	//echo $friendArray_explode;
	// Get friend for that person who has sent the request

	$add_friend_check_friend = mysql_query("SELECT friend_array from users where username='$user_from'");
	$get_friend_row_friend = mysql_fetch_assoc($add_friend_check_friend);
	$friend_array_friend = $get_friend_row_friend['friend_array'];
	$friendArray_explode_friend = explode(",",$friend_array_friend);
	$friendArray_count_friend = count($friendArray_explode_friend);

	if($friend_array == ""){
		$friendArray_count = count(NULL);
	}
	if($friend_array_friend == ""){
		$friendArray_count_friend = count(NULL);
	}
	if ($friendArray_count  == NULL){
		$add_friend_query = mysql_query("UPDATE users set friend_array=CONCAT(friend_array,'$user_from' )where username = '$user_name'");
	}
	if ($friendArray_count_friend  == NULL){
		$add_friend_query = mysql_query("UPDATE users set friend_array=CONCAT(friend_array,'$user_to') where username = '$user_from'");
	}
	if ($friendArray_count  >= 1){
		$add_friend_query = mysql_query("UPDATE users set friend_array=CONCAT(friend_array,',$user_from' )where username = '$user_name'");
	}
	if ($friendArray_count_friend  >= 1){
		$add_friend_query = mysql_query("UPDATE users set friend_array=CONCAT(friend_array,',$user_to') where username = '$user_from'");
	}
	// delete the requests which are already accepted
	$delete_request = mysql_query("delete from friend_requests where user_to='$user_to' and user_from='$user_from'");
	echo "Now you are friends!!!!";
//	header("Location: friend_requests.php");
}
if (isset($_POST['ignorerequest'.$user_from])){
  $ignore_request = mysql_query("delete from friend_requests where user_to='$user_to' and user_from='$user_from'");
  echo "Request ignored!!";
}
?>
<form action ="friend_requests.php" method="POST">
<input type = "submit" name = "acceptrequest<?php echo $user_from; ?>" value = "Accept Request">
<input type = "submit" name = "ignorerequest<?php echo $user_from; ?>" value = "Ignore Request">
</form>
<?php
 }
}
?>

