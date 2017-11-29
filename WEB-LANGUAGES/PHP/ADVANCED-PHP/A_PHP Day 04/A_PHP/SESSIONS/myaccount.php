<?php
ob_start();
session_start();
?>
</style>
<div align='center'>
<a href='about.php'>About Us</a> | <a href='contact.php'>Contact Us</a> | <a href='myaccount.php'>My Account</a> | <a href='session.php'>Session</a> | <a href='logout.php'>Logout</a>
</div><hr>
<h2><u>Welcome to My Account Page</u></h2>
<?php
if(isset($_SESSION['email']) && isset($_SESSION['pwd'])){
echo "Your Name is : ",$_COOKIE['Name'],'<br>';
echo 'Your Registered Mobile is : <b>',$_COOKIE['Mobile'],'</b><br>';
echo 'Email is : ',$_SESSION['email'],'<br><br>';
echo 'Last Visited : ',$_COOKIE['lastAccessed'],'<br>';
} else {
	header("location:about.php");
}
?>