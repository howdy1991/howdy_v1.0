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



?><head>
<title><?php echo "$firstname"; ?>| Howdy
</title>
</head>

<?php
$errormsg = "";
if (isset($_POST['addfriend'])){
$friend_request = $_POST['addfriend'];
$user_to = $username;// the request will be sent to that person whose profile is selected 
$user_from = $user_name;// the user who is logged in,he will send the request
if ($user_to == $user_name){
	// sending friend requests to yourself
	$errormsg = "You can't send friend request to yourself! <br />";
	echo $errormsg;
}
else{
	//Sending friend request to others
	$create_request = mysql_query("INSERT into friend_requests VALUES ('','$user_from','$user_to')");
	$errormsg = "Your friend request has been sent!";
	echo $errormsg;
}
}
else{
	//Do nothing
}
?>
<!--<img src="" height="500" width="500" alt="<?php echo $username; ?>'s Profile" title="<? echo $username; ?>'s Profile" /> -->

<div class="jumbotron" style="background: #00b377; height: 60%;">
<div class = "container">

<img src="<?php echo "$profile_pic"; ?>" width="220" style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;">
</div>;
</div></br/>
</br/></br/></br/>
<div class="container">
<br><br>
<form action="<?php echo $username; ?>" method="POST">
<?php
//Denying the friend requests if the sender is already a friend
$friendArray = "";
$countFriends= "";
$friendsArray12 = "";
$selectFriendsQuery = mysql_query("select friend_array from users where username = '$user_name'");
$friendRow = mysql_fetch_assoc($selectFriendsQuery);
$friendArray = $friendRow['friend_array'];
//echo $friendArray;
if ($friendArray != ""){
  $friendArray = explode(",",$friendArray);
  $countFriends = count($friendArray);
  $friendsArray12 = array_slice($friendArray,0,12);
$i = 0;

if (in_array($username,$friendArray)){

  //if friend already exists in the friend array list,   the friend request
  $addAsFriend = '<input type="submit" name= "removefriend" value= "Remove Friend">';
  echo $addAsFriend;
}
else{
	echo "<div > ";
 $addAsFriend = '<input type="submit" name= "addfriend" value= "Add As Friend">';
 echo $addAsFriend;
}
}
else{
$addAsFriend = '<input type="submit" name= "addfriend" value= "Add As Friend">';
echo $addAsFriend;
echo "</div>";
}
 $friend1="";
$friend2="";
if (@$_POST['removefriend']){
  $add_friend_check = mysql_query("select friend_array from users where username ='$user_name'");  //for logged in user
  $get_friend_row = mysql_fetch_assoc($add_friend_check);
  $friend_array = $get_friend_row['friend_array'];
  $friend_array_explode = explode(",",$friend_array);
  $friend_array_count = count($friend_array_explode);
//Friend array for the user who owns the profile
 $add_friend_check_username = mysql_query("select friend_array from users where username ='$username'");  //for user owning the profile
  $get_friend_row_username = mysql_fetch_assoc($add_friend_check_username);
  $friend_array_username = $get_friend_row_username['friend_array'];
  $friend_array_explode_username = explode(",",$friend_array_username);
  $friend_array_count_username = count($friend_array_explode_username);
  
  $usernamecomma = ",".$username;
  $usernamecomma2 = $username.",";
  
  $user_namecomma = ",".$user_name;
  $user_namecomma2 = $user_name.",";
  
  if (strstr($friend_array,$usernamecomma)){
    $friend1 = str_replace("$usernamecomma","",$friend_array);
  }
  else
  if (strstr($friend_array,$usernamecomma2)){
    $friend1 = str_replace("$usernamecomma2","",$friend_array);
  }
  else
  if (strstr($friend_array,$username)){
  $friend1 = str_replace("$username","",$friend_array);
  }
  //echo  $friend1;
  // remove the logged in person from other person's array
  if (strstr($friend_array,$user_namecomma)){
    $friend2 = str_replace("$user_namecomma","",$friend_array);
  }
  else
  if (strstr($friend_array,$user_namecomma2)){
    $friend2 = str_replace("$user_namecomma2","",$friend_array);
  }
  else
  if (strstr($friend_array,$user_name)){
  $friend2 = str_replace("$user_name","",$friend_array);
  }
 $removeFriendQuery = mysql_query("UPDATE users SET friend_array='$friend1' where username = '$user_name'");
 $removeFriendQuery_username = mysql_query("UPDATE users SET friend_array='$friend2' where username = '$username'");
 echo "Friend Removed...";
}
?>
<input type="submit" name="sendmsg" value="Send Message" />
</form>
</div>
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
	
	
	 $get_user_info = mysql_query("SELECT * FROM users WHERE username='$added_by'");
	//echo $get_user_info;
	
	$get_info = mysql_fetch_assoc($get_user_info);
	$profilepic_info = $get_info['profile_pic'] ;
	echo $profilepic_info;


	echo"

	<div class='container-fluid'style='border: 1px solid black;background-color:#b3d9ff;border-radius:5px;'>
	<br><img src='userdata/profile_pics/$profilepic_info'height='30' width='50'>
        <h4>$body &nbsp;&nbsp;</h4>
        <hr />
        <a href=$added_by>$added_by</a> - $date_added - 
        </div>
        <hr />";
	;
}
if (isset($_POST['sendmsg']))
{
  //<a href="account_settings.php"><span class="glyphicon glyphicon-cog"> Account-Settings</span></a>
  //header("Location: send_msg.php?u=$username");
}

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
<?php
//echo "Test of profile pic";
$fArr_username = "";
$cnt_username= "";
$fArr12_username = "";
$fQuery_username = mysql_query("select friend_array from users where username = '$username'"); //this is important ..needs to be changed as per requirement
$fRow_username = mysql_fetch_assoc($fQuery_username);
$fArr_username = $fRow_username['friend_array'];
//echo $fArr_username;
if ($fArr_username != ""){
  $fArr_username = explode(",",$fArr_username);
  $cnt_username = count($fArr_username);
  //echo $cnt_username;
  $fArr12_username = array_slice($fArr_username,0,12);
$j = 0;
if($cnt_username != 0){
  foreach ($fArr12_username as $key => $value){
    $j++;
    $getFriendQuery = mysql_query("select * from users where username = '$value' LIMIT 1");
    $getFriendRow = mysql_fetch_assoc($getFriendQuery);
    $friendUsername = $getFriendRow['username'];
    $friendProfilePic = $getFriendRow['profile_pic'];
    if ($friendProfilePic == ""){
      echo "";
      // If the user does not have any profile pic then default pic will be shown
      echo "<a href='$friendUsername'><img src= 'images/profile_pic.jpg' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='40' width='50' style='padding-right: 6px;'></a>";
    }
   else{
    echo "<a href='$friendUsername'><img src= 'userdata/profile_pics/$friendProfilePic' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='40' width='50' style='padding-right: 6px;'></a>";
   } // end of if
} // end of for each loop
}// end of if ($cnt_username != 0)
   }
else{
  echo $username. "has no friends yet";
}

//<h4 style = "text-align: center; color: #660029; text-weight: 2px;"><span class="glyphicon glyphicon-user"></span>&nbsp <?php echo $username; ?>'s Friends</h4>
</div>
<br><hr><br>
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


</div>


<!-- <?php //include ( "./inc/footer.inc.php" ); ?>  !-->

