<?php
session_start();
session_destroy();
//echo 'You have been logged out. <a href="/">Go back</a>';
header("Location: signup_logout.php");
//header("Location:/index.php");
//exit();
?>