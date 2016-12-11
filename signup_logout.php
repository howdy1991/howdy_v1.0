 <?php include( "./inc/header.inc.login.php" ); ?>
<?php
if (!isset($_SESSION["user_login"])) {
    echo "";
}
else
{
	//header("Refresh: 10; URL=home.php");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=home.php\">";	
}
?>

<?php
$reg = @$_POST['reg'];
//declaring variables to prevent errors
$fn = ""; //First Name
$ln = ""; //Last Name
$un = ""; //Username
$em = ""; //Email
$em2 = ""; //Email 2
$pswd = ""; //Password
$pswd2 = ""; // Password 2
$d = ""; // Sign up Date
$u_check = ""; // Check if username exists
//form
$fn = strip_tags(@$_POST['fname']);
$ln = strip_tags(@$_POST['lname']);
$un = strip_tags(@$_POST['username']);
$em = strip_tags(@$_POST['email']);
$em2 = strip_tags(@$_POST['email2']);
$pswd = strip_tags(@$_POST['password']);
$pswd2 = strip_tags(@$_POST['password2']);
$d = date("Y-m-d"); // Year - Month - Day

if ($reg) {
if ($em==$em2) {
// Check if user already exists
$u_check = mysql_query("SELECT username FROM users WHERE username='$un'");
// Count the amount of rows where username = $un
$check = mysql_num_rows($u_check);
//Check whether Email already exists in the database
$e_check = mysql_query("SELECT email FROM users WHERE email='$em'");
//Count the number of rows returned
$email_check = mysql_num_rows($e_check);
if ($check == 0) {
  if ($email_check == 0) {
//check all of the fields have been filed in
if ($fn&&$ln&&$un&&$em&&$em2&&$pswd&&$pswd2) {
// check that passwords match
if ($pswd==$pswd2) {
// check the maximum length of username/first name/last name does not exceed 25 characters
if (strlen($un)>25||strlen($fn)>25||strlen($ln)>25) {
echo "The maximum limit for username/first name/last name is 25 characters!";
}
else
{
// check the maximum length of password does not exceed 25 characters and is not less than 5 characters
if (strlen($pswd)>30||strlen($pswd)<5) {
echo "Your password must be between 5 and 30 characters long!";
}
else
{
//encrypt password and password 2 using md5 before sending to database
$pswd = md5($pswd);
$pswd2 = md5($pswd2);
$query = mysql_query("INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$pswd','$d','0','Write something about yourself.','','no')");
die("<h2>Welcome to Howdy</h2>...");
}
}
}
else {
echo "Your passwords don't match!";
}
}
else
{
echo "Please fill in all of the fields";
}
}
else
{
 echo "Sorry, but it looks like someone has already used that email!";
}
}
else
{
echo "Username already taken ...";
} 
}
else {
echo "Your E-mails don't match!";
}
}
?>

<?php
//Login Script
if (isset($_POST["user_login"]) && isset($_POST["password_login"])) {
	$user_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_login"]); // filter everything but numbers and letters
    $password_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password_login"]); // filter everything but numbers and letters
	$md5password_login = md5($password_login);
    $sql = mysql_query("SELECT id FROM users WHERE username='$user_login' AND password='$md5password_login' LIMIT 1"); // query the person
	//Check for their existance
	
	$userCount = mysql_num_rows($sql); //Count the number of rows returned	
	if ($userCount == 1) {
		
		while($row = mysql_fetch_array($sql)){ 
		
             $id = $row["id"];
	}
	
		 $_SESSION["user_login"] = $user_login;
        exit("<meta http-equiv=\"refresh\" content=\"0\">");
		//exit();
		}
		else 
		{
		echo "That information is incorrect, try again";
		
		exit();
	}
}
?>


<div class="container text-center" >
  <br/>
  <p>Relax... its<b> FREE !!!</b></p><br/>
  </div>
  <div class="container" >
  <section class="body-sign">
		  <div class="row">
			<div >
				<a href="/" class="logo pull-left">
					<img src="images/logo_howdy_B.png" height="54" alt="Porto Admin" />
				</a><br/>

				<div>
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="container">
						<form class="form-horizontal" action="#" method="post" style = "  text-align: center; ">
							<div class="form-group">
							
								<input name="fname"  class="form-control input-sm" title="First Name"  placeholder="First Name" value="<?php echo $fn; ?>"/>
								
							</div>
							<div class="form-group">
							
								<input type="text" size="40" name="lname" class="form-control input-sm" title="Last Name" placeholder="Last Name" value="<?php echo $ln; ?>"/>
								
							</div>
							<div class="form-group">
							
								<input type="text" size="40" name="username" class="form-control input-sm" title="Username" placeholder="User Name" value="<?php echo $un; ?>"/>
								
							</div>
							

							<div class="form-group">
								
								<input type="text" size="40" name="email" class="form-control input-sm" title="Email" placeholder="Email" value="<?php echo $em; ?>"/>
							</div>
							<div class="form-group">
								
								<input type="text" size="40" name="email2" class="form-control input-sm" title="Repeat Email" placeholder="Re-Enter Email" value="<?php echo $em2; ?>"/>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-6 mb-sm">
										
										<input type="password" size="40" name="password"  class="form-control input-sm" placeholder="Passowrd" value=""/>
									</div>
									<div class="col-sm-6 mb-sm">
										
										<input type="password" size="40" name="password2" class="form-control input-sm" placeholder="Re-Enter Passowrd" value="" />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									
									<input type="submit"  class="button button2" name="reg" value="Sign Up!">
									
								</div>
							</div>

							<span class="mt-sm mb-sm line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Already have an account? <a href="signin.php">Sign In!</a>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
			</div>
		  </div>
		</section>
  <!--
  <div class="row">
    <div class="col-sm-4" style="background-color: #1bbab3; border: 1px solid #01292b; border-radius: 10px" >

       <form class="form-horizontal" action="#" method="post" style = " color: #fff; text-align: center; ">
            <h2 style = "text-align: center;">Sign up Below ...</h2><hr><br/>
           
		     <div class="form-group" >
		   
           <input type="text" size="40" name="fname"  class="auto-clear" title="First Name"  placeholder="First Name" value="<?php echo $fn; ?>"><p /></div>
		     <div class="form-group">
		   
           <input type="text" size="40" name="lname" class="auto-clear" title="Last Name" placeholder="Last Name" value="<?php echo $ln; ?>"><p /></div>
		     <div class="form-group">
		   
           <input type="text" size="40" name="username" class="auto-clear" title="Username" placeholder="User Name" value="<?php echo $un; ?>"><p /></div>
		   <div class="form-group">
		   
           <input type="text" size="40" name="email" class="auto-clear" title="Email" placeholder="Email" value="<?php echo $em; ?>"><p /></div>
		   <div class="form-group">
		  
           <input type="text" size="40" name="email2" class="auto-clear" title="Repeat Email" placeholder="Re-Enter Email" value="<?php echo $em2; ?>"><p /></div>
		   <div class="form-group">
		   
           <input type="password" size="40" name="password" placeholder="Passowrd" value=""><p /></div>
		   <div class="form-group">
		   
           <input type="password" size="40" name="password2"  placeholder="Re-Enter Passowrd" value=""><p /></div>
		   <div class="form-group">
           <input type="submit"  class="button button2" name="reg" value="Sign Up!"></div>
           </form>
       </div>
       <div class="col-sm-4">
      
       </div>
	   
	   <div class="col-sm-4" style="background-color: #1bbab3; border: 1px solid #01292b; border-radius: 10px" >
	    <form class="form-horizontal" action="#" method="post" name="form1"  style = "font-weight: bold;  color: #fff; text-align: center;">
            <h2>Already a Memeber? Login below ...</h2><hr></br/>
            
			  <div class="form-group">
			
				<input type="text" size="40" name="user_login" id="user_login" placeholder="User Name" class="auto-clear" title="" /><p /></div>
				  <div class="form-group">
				
				<input type="password" size="40" name="password_login" id="password_login"  placeholder="Passowrd" value="" /><p /><div>
				  <div class="form-group">
				<input type="submit"  class="button button2" name="button" id="button" value="Sign In"></div>
			</form>
            </div>
			</div>
			</br></br><h1 style = "text-align: center; font-weight: bold;">Thanks For Supporting Us</h1>
			</div>
	   
	   </div>
	   -->

 </div>
  <br/><br/>
  <div class="col-sm-1">
&nbsp;
&nbsp;
<br/>
<br/>
</div>
  
<?php include ( "./inc/footer.inc.php" ); ?>


