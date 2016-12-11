<?php
include ("./inc/header.inc.accountsettings.php.");


if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {
$user_name = " ";
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
echo $db_firstname;
$db_lastname = $get_row['last_name'];
echo $db_lastname;
$db_bio = $get_row['bio'];

//Submit what the user types into the database
if($updateinfo){
	//Submit the form
$firstname = strip_tags(@$_POST['fname']);
$lastname = strip_tags(@$_POST['lname']);
$bio = @$_POST['bio'];

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

}
}

else{
	//Do nothing
}
?>
<h2>Edit your account settings below</h2>
<hr>
<form action="account_settings.php" method="post">
<p><b>CHANGE YOUR PASSWORD:</b></p><br />
<div style="color: fff;">
Your Old Password :   <input type="text" name="oldpassword" id="oldpassword" size="30"><br />
Your New Password :   <input type="text" name="newpassword" id="newpassword" size="30"><br />
Repeat New Password : <input type="text" name="newpassword2" id="newpassword2" size="30"><br />
<input type="submit" name="senddata" id="senddata" class="button button2" value="Update Password">
</form>
<hr />
<p>UPDATE YOUR PROFILE INFO:</p> <br />

First Name: <input type="text" style="color: #1a0000;" name="fname" id="fname" size="40" value="<?php echo $db_firstname; ?>"><br/>
Last Name: <input type="text" style="color: #1a0000;" name="lname" id="lname"  size="40" value="<?php echo $db_lastname; ?>"><br/>
About You: <textarea name="aboutyou" style="color: #1a0000;" id="aboutyou" rows="5" cols="40" placeholder=<?php echo $db_bio;?>></textarea>
<hr />
<input type="submit" name="sanddata" id="senddata" class="button button2" value="Update Information">
</form>
</div>