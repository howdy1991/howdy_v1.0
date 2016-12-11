<?php
$db = new mysqli("localhost","root","","sumon1_msg");

if ($db->connect_error){

	die("could not connect to DB");

}


$username = stripcslashes(htmlspecialchars($_GET['username']));
$message = stripcslashes(htmlspecialchars($_GET['message']));

if ($username == "" || $message == ""){

	die();


}

$result = $db->prepare("INSERT INTO messages VALUES ('', ?, ?)");
$result->bind_param("ss", $username, $message);
$result->execute();

echo "test";


?>