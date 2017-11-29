<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['pwd'])){
$file="../UPLOADS/img/users/5d35dbd792075e6b1f06fa3b431caeb9952be56d-WP6_ADDING_POST.mp4";
$type="video/mp4";
$mode="attachment";
header("Content-Type:".$type);
header("Content-Disposition:".$mode.";filename=".$file);
header("Content-Length:".filesize($file));
readfile($file);
} else {
	header("location:file.php");
}
?>