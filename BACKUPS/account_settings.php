<?php
include ("./inc/header.inc.accountsettings.php.");


if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {

   		die("<div class = 'container'><h2>You Must Be Logged In First....!!</h2></div>");
}


?>
<?php
$senddata = @$_POST['senddata'];
//Password Variables
$old_password = strip_tags(@$_POST['oldpassword']);
$new_password = strip_tags(@$_POST['newpassword']);
$repeat_password = strip_tags(@$_POST['newpassword2']);
if ($senddata){
  echo "$old_password, $new_password, $repeat_password";
	//If the form is submitted...
	$password_query = mysql_query("SELECT * FROM users WHERE username='$user_name'");
	while ($row = mysql_fetch_assoc($password_query)){
		$db_password = $row['password'];
	//	echo "$user_name, $db_password";
		//md5 of the old password
		$old_password_md5 = md5($old_password);
		//Check whether old password matches with $db_password
		if ($old_password_md5 == $db_password){
			//Continue changing the password
			echo "Your password matches" ;
			// Check whether the new password and the repeat password matches
			if ($new_password == $repeat_password){
				if (strlen($new_password)<=4){
					echo "Sorry! Your password must be at least 5 characters";
				}
				// When the repeat password matches, md5 the old password before we update it ;
				$new_password_md5 = md5($new_password);
				$password_update_query = mysql_query("UPDATE users set password = '$new_password_md5' where username = '$user_name'");
				echo "Success! Your password has been changed!";

			}
			else{
				echo "Your password does not match with repeat password" ;
			}
		}

		else{
			echo "The password entered is incorrect" ;
		}
	}
}
else
{
	echo "Please submit some data!";
}
$updateinfo = @$_POST['updateinfo'];
//First Name , Last name and About will be shown:
$get_info = mysql_query("SELECT first_name, last_name , bio from users where username = '$user_name'");
$get_row = mysql_fetch_assoc($get_info);
$db_firstname = $get_row['first_name'];
//echo $db_firstname;
//echo $db_lastname;
$db_bio = $get_row['bio'];
//echo $db_bio;

//Submit what the user types into the database
$firstname = strip_tags(@$_POST['fname']);
$lastname = strip_tags(@$_POST['lname']);
$bio = strip_tags(@$_POST['aboutyou']);
if($updateinfo){
	//Submit the form

$info_submit_query = mysql_query("UPDATE users set first_name='$firstname', last_name='$lastname' , bio='$bio' where username = '$user_name'");
	echo "Your profile info has been updated!";
	//header("Location: $user_name");
/*
if (strlen($firstname) < 3){
	echo "Your first name must be at least 3 characters long!";
}
else
if (strlen($lastname) < 3){
	echo "Your last name must be at least 3 characters long!";
}
else{
	$info_submit_query = mysql_query("UPDATE users set first_name='$firstname', last_name='$lastname' , bio='$bio' where username = '$user_name'");
	echo "Your profile info has been updated!";
	header("Location: $user_name");

}*/
}

else{
	//Do nothing
}
//Check whether profile pic is uploaded or not for user
$check_pic = mysql_query("SELECT profile_pic FROM users WHERE username = '$user_name'");
$get_pic_row = mysql_fetch_assoc($check_pic);
$profile_pic_db = $get_pic_row['profile_pic'];
echo $profile_pic_db;
if ($profile_pic_db == "")
{
	$profile_pic = "images/profile_pic.jpg";
}
else
{
	$profile_pic = "userdata/profile_pics/".$profile_pic_db;
}
echo $profile_pic;
// Profile pic upload script
if (isset($_FILES['profilepic'])){
	if(((@$_FILES["profilepic"]["type"]=="image/jpeg") || (@$_FILES["profilepic"]["type"]=="image/png") || (@$_FILES["profilepic"]["type"]=="image/gif")) && (@$_FILES["profilepic"]["size"] < 1048576))// 1 MB
	{
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789" ;
$rand_dir_name = substr(str_shuffle($chars),0,15);
mkdir("userdata/profile_pics/$rand_dir_name");


if (file_exists("userdata/profile_pics/$rand_dir_name/".@$_FILES["profilepic"]["name"])){
echo @$_FILES["profilepic"]["name"]." Already exists ";
}
else{
	//Moving the pic from the temporary folder into the folder that has been created with a random name 
	move_uploaded_file(@$_FILES["profilepic"]["tmp_name"],"userdata/profile_pics/$rand_dir_name/".$_FILES["profilepic"]["name"]);
	echo "Uploaded and stored in: userdata/profile_pics/$rand_dir_name/".@$_FILES["profilepic"]["name"];
	$profile_pic_name = @$_FILES["profilepic"]["name"];
	$profile_pic_query = mysql_query("UPDATE users set profile_pic = '$rand_dir_name/$profile_pic_name' WHERE username='$user_name'");
	//header("Location: account_settings.php");
}
	}
	else {
		echo "Invalid file!!!!!! It is a type error or it must be a size error.....";

	}
}

?>
<div class="container">
<h2>Edit your account settings below</h2>
<hr />

<p>UPLOAD THE PROFILE PIC:</p>

<form action="" method="POST" enctype="multipart/form-data">
<img src="<?php echo "$profile_pic"; ?>" width="100">
<input type = "file" name="profilepic" /><br />
<input type="submit" name="uploadpic"  class="button button2" value= "UPLOAD IMAGE">
</form>
<hr>
<form action="account_settings.php" method="post">
<p><b>CHANGE YOUR PASSWORD:</b></p><br />
<div style="color: fff;">
<input type="text" name="oldpassword" id="oldpassword" size="30" placeholder="Your Old Password"><br /><br />
<input type="text" name="newpassword" id="newpassword" size="30" placeholder="Your New Password"><br /><br />
<input type="text" name="newpassword2" id="newpassword2" size="30" placeholder="Repeat New Password"><br /><br />
<input type="submit" name="senddata" id="senddata" class="button button2" value="Update Password">
</form>
<hr />
<p><b>UPDATE YOUR PROFILE INFO:</b></p> <br />

First Name: <input type="text" style="color: #1a0000;" name="fname" id="fname" size="40" value="<?php echo $db_firstname; ?>"><br/><br/>
Last Name: <input type="text" style="color: #1a0000;" name="lname" id="lname"  size="40" value="<?php echo $db_lastname; ?>"><br/><br/>
About You: <textarea name="aboutyou" style="color: #1a0000;" id="aboutyou" rows="5" cols="42" placeholder=<?php echo $db_bio;?>></textarea><br />
<br />
<input type="submit" name="updateinfo" id="updateinfo" class="button button2" value="Update Information">
</form>
<hr />
</div>
</div>