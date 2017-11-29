<style>
#top{
	position:absolute;
	top:10px;
	right:30px;
	}
</style>
<?php
if(isset($_COOKIE['Email']) && isset($_COOKIE['Pwd'])){
	echo "<img src='Andi.jpg' width='32px' height='32px' id='top'/>";
	echo "<h3> I am a Green Paper...</h3>";
	echo "Snapdeal -------- Best Selling";
	echo "<a href='logout.php'>Logout</a>";
} else {
	header('location:login.php');
}
?>