<?php include ("./inc/header.inc.php"); ?>
<?php
	if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {
$user_name = " ";
}
if (isset($_GET['u'])) {
	$username = mysql_real_escape_string($_GET['u']);
	if (ctype_alnum($username)) {
	$check = mysql_query("SELECT username FROM users WHERE username='$username'");
	if (mysql_num_rows($check)===1) {
	$get = mysql_fetch_assoc($check);
	$username = $get['username'];

        //echo $username;
        // Check user is not sending messages to themselves
        if($username != $user_name){
          if(isset($_POST['send_msg'])) {
            //$msg_body="Enter the msg u want to send";
            $msg_title = strip_tags(@$_POST['msg_title']);
            $msg_body = strip_tags(@$_POST['msg_body']);

            $date = date("Y-m-d");
            $opened = "no";
            $deleted = "no";
            if ($msg_title == "Enter the message title here...") {
              echo "Please give your message a title";
            }
            else 
            if (strlen($msg_title) <3)
            {
            echo "Your message title cannot be less than 3 chars";
          }
          else
            if($msg_body == "Enter the msg u want to send"){
              echo "Check if";
              echo "Please write a message";
            }
            else{
              echo "Check else";
            $send_msg = mysql_query("INSERT INTO pvt_messages values ('','$user_name','$username','$msg_title','$msg_body','$date','$opened','$deleted')");
            echo "Your message has been sent!!";
            }
          }
          echo "
          <form action ='send_msg.php?u=$username' method='POST'>
          <h2>Compose a Message: ($username)</h2>
          <input type='text' name='msg title' size='30' onClick=\"value=''\" value='Enter the message title here...'><p />
          <textarea cols='70' rows='12' name='msg_body'>Enter the msg u want to send</textarea> <p />
          <input type='submit' name='send_msg' value='Send Message'>
          </form>
          ";
        }

        else{
          echo "You can't send message to yourself";
          //header("Location: $user_name");
        }
}
 }
}
?>