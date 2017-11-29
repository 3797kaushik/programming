<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Calcutta');
setcookie('Email',$_SESSION['email'],time()+30*24*60*60,'/');
setcookie('Pwd',base64_encode($_SESSION['pwd']),time()+30*24*60*60,'/');
setcookie('Mobile','98578589589',time()+30*24*60*60,'/');
setcookie('Name','Rajesh Reddy',time()+60*24*30*30,'/');
setcookie('City','Hyderabad',time()+30*24*60*60);
setcookie('lastAccessed',date('l, dS-F-Y, h:i:s A'),time()+30*24*60*60,'/');

foreach($_COOKIE as $k=>$v){
	echo "$k == $v<br>";
}
?>