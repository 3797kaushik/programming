<?php
ob_start();
session_start();

?>
<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h2>Static Session in PHP</h2><div>";

echo 'Session Name = <b>',session_name(),'</b><br>';
echo 'Session Id = <b>',session_id(),'</b><br>';
/*
echo "</div><h2>Dynamic Session Name & Session Ids</h2><div>";

session_name('JSID');
echo 'Session Name = <b>',session_name(),'</b><br>';
session_regenerate_id();
echo 'Session Id = <b>',session_id(),'</b><br>'; */

echo "</div><h2>Fetch Cookie Details in PHP</h2><div>";
foreach($_COOKIE as $k=>$v){
	echo "$k = <b>$v</b><br>";
}

echo "</div><h2>Fetch Session Details in PHP</h2><div>";

$_SESSION['email'] = 'raj@gmail.com';
$_SESSION['pwd'] = 'harrY_14';
foreach($_SESSION as $k=>$v){
	echo "$k = <b>$v</b><br>";
}

echo "</div><h2>Destroy Session Id</h2><div>";
echo '<b>Before Destroy : </b>',session_id(),'<br>';
//session_destroy();
echo '<b>After Destroy : </b>',session_id(),'<br><hr><br>';
?>
<div align='center'>
<a href='about.php'>About Us</a> | <a href='contact.php'>Contact Us</a> | <a href='myaccount.php'>My Account</a> | <a href='session.php'>Session</a> | <a href='logout.php'>Logout</a>
<pre>





















</pre>