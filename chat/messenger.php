<?php

$db = new mysqli("localhost","root","","sumon1_msg");

if ($db->connect_error){

	die("could not connect to DB");

}else{

	die("connected to DB, successfully");

}
?>