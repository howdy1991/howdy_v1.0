<?php include ("./inc/header.inc.php"); ?>
<?php 
if (isset($_GET['u'])) {
	$username = mysql_real_escape_string($_GET['u']);
	if (ctype_alnum($username)) {
	$check = mysql_query("SELECT username, first_name FROM users WHERE username='$username'");
	if (mysql_num_rows($check)===1) {
	$get = mysql_fetch_assoc($check);
	$username = $get['username'];
	$firstname = $get['first_name'];
}
else
{
echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost:81/social_network/findfriends/index.php\">";
exit();
}
}
}
//POST
if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {
$user_name = " ";
}
$post = @$_POST ['post'];

if ($post != "") {

	
	$date_added = date("Y-m-d h:i:sa");
	$added_by = $user_name;
	//$added_by = $firstname;
	$user_posted_to = $username;

	$sqlCommand = "INSERT INTO posts VALUES('','$post','$date_added','$added_by','$user_posted_to')";
	$query = mysql_query($sqlCommand) or die (mysql_error());
}

//Check whether profile pic is uploaded or not for user
$check_pic = mysql_query("SELECT profile_pic FROM users WHERE username = '$username'");
$get_pic_row = mysql_fetch_assoc($check_pic);
$profile_pic_db = $get_pic_row['profile_pic'];
if ($profile_pic_db == "")
{
	$profile_pic = "images/profile_pic.jpg";
}
else{
	$profile_pic = "userdata/profile_pics/".$profile_pic_db;
}



?>
<head>
<title><?php echo "$firstname"; ?>| Howdy
</title>
</head>

<!--<img src="" height="500" width="500" alt="<?php echo $username; ?>'s Profile" title="<? echo $username; ?>'s Profile" /> -->
<div class="jumbotron" style="background: #00b377; height: 60%;">
<div class = "container">

<img src="<?php echo "$profile_pic"; ?>" width="220" style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;">
</div>;
</div></br/>
</br/></br/></br/>
<div class="container">
<div id="wrapper" style="float: right; width:70%;">
  <?php
          if (!isset($_SESSION["user_login"])){
          	echo '<h2>you have to login first to post</h2>';
          }
          else 
          {

echo"<div class='postForm'>
<form role='form' method='post' action='$username'>

<textarea class='form-control'  id='post' name='post'  style= 'color: #000000; font-weight: bold; border: 1px solid #000000;' placeholder='What Are You Thinking Now...'></textarea>
<input type='submit'  name='send'  value='Publish' style='background-color: #DCE5EE; float: right; border: 1px solid #666; color:#666;height:30px; width: 65px;' >
<br/>
</form>
</div>";
}
?>
<div class="profilePosts">
<br/><br/>
	<?php
	$getposts = mysql_query("SELECT * FROM posts WHERE user_posted_to='$username' ORDER BY id DESC LIMIT 10") or die(mysql_error());
	while ($row = mysql_fetch_assoc($getposts)){
	$id = $row['id'];
	$body = $row['body'];
	$date_added = $row['date_added'];
	$user_posted_to = $row['user_posted_to'];
	$added_by = $row['added_by'];
	echo"
	<div class='container-fluid'style='border: 1px solid black;background-color:#b3d9ff;border-radius:5px;'> <h4>$body &nbsp;&nbsp;</h4><hr /><a href=$added_by>$added_by</a> - $date_added - </div><hr />";
	;
}
	?>

	<?php

	$get_info = mysql_query("SELECT first_name, last_name , bio from users where username = '$user_name'");
	$get_row = mysql_fetch_assoc($get_info);
	$db_firstname = $get_row['first_name'];
	//echo $db_firstname;
	$db_lastname = $get_row['last_name'];
	//echo $db_lastname;
	$db_bio = $get_row['bio'];
	//echo $db_bio;


	?>

</div>
<div class="profileLeftSideContent">Some content about this person's profile...</div>

</div>
<div class="textHeader" style="margin-left: 20px;"><?php echo $firstname; ?>'s Details</div><br/>
<div class = "container-fluid" >
<div class="col-sm-3" style = "border: 1px solid #fff; background-color:#b3d9ff; border-style: single; box-shadow: 0 4px 8px 0 #7a7a52, 0 6px 20px 0 #c2c2a3;">

<h4 style = "text-align: center; color: #660029; text-weight: 2px;"><span class="glyphicon glyphicon-user"></span>&nbsp <?php echo $username; ?>'s Friends</h4>
<div style="border-radius: 8px;">
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/>
<img style="padding: 3px" src="images/profile_pic.jpg" height="50" width="50"/><br/><br/>
</div>

</div>
<div class="col-sm-1">
&nbsp;
&nbsp;
<br>
</div>
<div class="col-sm-3" style = "border: 1px solid #fff;border-style: single; background-color:#b3d9ff; box-shadow: 0 4px 8px 0 #7a7a52, 0 6px 20px 0 #c2c2a3;">
<p><br/></p>
<h4 style = "text-align: center; color: #660029; text-weight: 2px;">About <?php echo $firstname; ?></h4>
<?php
$about_query = mysql_query("SELECT bio FROM users WHERE username = '$username'");
$get_result = mysql_fetch_assoc($about_query);
$about_the_user = $get_result['bio'];
echo $about_the_user;
?>
<p><br/></p>

</div>

</div>


</div>


<!-- <?php //include ( "./inc/footer.inc.php" ); ?>  !-->

