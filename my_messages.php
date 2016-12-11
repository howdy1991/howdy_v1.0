<?php include ("./inc/header.inc.php"); ?>
<br>
 <div class="container" style="border:1px solid #1a1a00;border-radius:10px">
<h2>My Unread Messages:</h2><p />
<?php
	if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {
$user_name = " ";
}

// Grab the messages for the logges in user
$grab_messages = mysql_query("select * from pvt_messages where user_to= '$user_name' && opened='no' && deleted='no'");
$numrows_unread = mysql_numrows($grab_messages);
if ($numrows_unread > 0){
while($get_msg = mysql_fetch_assoc($grab_messages)){
  $id = $get_msg['id'];
  $user_from = $get_msg['user_from'];
  $user_to = $get_msg['user_to'];
  $msg_title = $get_msg['msg_title'];
  $msg_body = $get_msg['msg_body'];
  $date = $get_msg['date'];
  $opened = $get_msg['opened'];
  $deleted = $get_msg['deleted'];
  ?>
  <script language="javascript">
function toggle<?php echo $id; ?>(){
  var ele= document.getElementById("toggleText<?php echo $id; ?>");
  var text= document.getElementById("displayText<?php echo $id; ?>");
  if (ele.style.display == "block"){
    ele.style.display = "none";
    //text.innerHTML = 'show';
  }
  else{
    ele.style.display = "block";
    //text.innerHTML = 'hide';
}
}
</script>
  <?php
    if(strlen($msg_title) > 50){
    $msg_title = substr($msg_title,0,50)."...";
  }
  else {
    $msg_title = $msg_title;
  }
  
  if(strlen($msg_body) > 150){
    $msg_body = substr($msg_body,0,150)."...";
  }
  else {
    $msg_body = $msg_body;
    if (@$_POST['setopened_'.$id.'']){
      // Update the private message table according to the opened field
      $setopened_query = mysql_query("UPDATE pvt_messages SET opened='yes' WHERE id = '$id'" );
    }
  echo "
  <form method='POST' action='my_messages.php' name='$msg_title'>
  <b><a href='$user_from'>$user_from</a></b>
  <input type='button' name='openmsg' value='$msg_title' onClick='javascript:toggle$id()'>
  <input type='submit' name='setopened_$id' value=\"I've read this\">

  </form>
  <div id='toggleText$id' style='display:none;'>
  <br />$msg_body
  </div>
  <hr /><br />
  ";
   }
} // end of while
      }
else
{
  echo "You dont have any unread messages as of now";
}
?>
</div>
<br/>
<div class="container" style="border:1px solid #1a1a00;border-radius:10px; color:#000000;">
<h2>My Read Messages:-</h2>
<hr />
<?php
	if(isset($_SESSION['user_login'])){
  $user_name = $_SESSION["user_login"];
   }
   else {
$user_name = " ";
}
// Grab the messages for the logges in user
$grab_messages = mysql_query("select * from pvt_messages where user_to= '$user_name' && opened='yes' && deleted='no'");
$numrows_read = mysql_numrows($grab_messages);
if ($numrows_read > 0){
  //echo "\n check if";
while($get_msg = mysql_fetch_assoc($grab_messages)){
  //echo "\n enter while";
  $id = $get_msg['id'];
  echo "\n MESSAGE NO :- ";
  echo $id ;
  echo "\n <br>";
  $user_from = $get_msg['user_from'];
  $user_to = $get_msg['user_to'];
  $msg_title = $get_msg['msg_title'];
  $msg_body = $get_msg['msg_body'];
  $date = $get_msg['date'];
  $opened = $get_msg['opened'];
  $deleted = $get_msg['deleted'];
  ?>
  <script language="javascript">
function toggle<?php echo $id; ?>(){
  <?php echo "enter toggle"; ?>
  var ele= document.getElementById("toggleText<?php echo $id; ?>");
  var text= document.getElementById("displayText<?php echo $id; ?>");
  if (ele.style.display == "block"){
    ele.style.display = "none";
    //text.innerHTML = 'show';
  }
  else{
    ele.style.display = "block";
    //text.innerHTML = 'hide';
}
}
</script>
  <?php
  if(strlen($msg_title) > 50){
    $msg_title = substr($msg_title,0,50)."...";
  }
  else {
    //echo "Checking message title \n <br>";
	echo "<br>";
    $msg_title = $msg_title;
  }

  if(strlen($msg_body) > 150){
    $msg_body = substr($msg_body,0,150)."...";
  }
  else{

    $msg_body = $msg_body;
	echo "<div class='container'>";
     echo $msg_body;
	 
	 if(@$_POST['deleted_' . $id . '']){
		 $delete_msg_query = mysql_query("UPDATE pvt_messages SET deleted='yes' WHERE id = '$id'");
	 }
         if(@$_POST['reply_' . $id . '']){
           //echo "Reply";
		//header("Location: /msg_reply.php");
	echo "<meta http-equiv=\"refresh\" content=\"0; url=msg_reply.php?u=$user_from\">" ;
		 }


		 
  echo "
 
  <form method='POST' action='my_messages.php' name='$msg_title'>
  <b><a href='$user_from'>$user_from</a></b>
  <input type='button' name='openmsg' value='$msg_title' onClick='javascript:toggle$id()'> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='submit' name='deleted_$id' value=\"x\" title='Delete Message'>
      <input type='submit' name='reply_$id' value=\"Reply\">
  </form>
  <div id='toggleText$id' style='display:none;'><hr>
  <br />$msg_body
  </div>
  <hr /><br />

  ";
    echo "</div>";
}
}//end of while
}
else
{
  echo " You have not read any messages yet";
}
?>
  </div>