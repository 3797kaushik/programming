<?php
session_start();
?>
<style>
#img_book{
	box-shadow:3px 2px 20px 5px #444;
	margin:30px 50px 0px 30px;
	float:left;
}
div{
position:relative;
top:20px;
}
</style>
<script>
function doLog(){
	alert("Please Log in First to Download");
}
</script>
<img src='book.jpg' border='2' id='img_book'/>
<div>
<h2>PHP Book</h2>
<p>This is a great quick reference book that presents content and examples in a way that it serves both beginners and intermediate users alike. A must buy book!</p>
<p>Here you will find corrections, tips, clarifications, and samples related to the PHP reference book. You are encouraged, if you find an error or something that needs clarification, to post a comment to the blog so it can be addressed in a post and fixed for later versions (that’s what I call wishful thinking).</p>
<p>If you want to View Book <a href='view.php' target='_blank'><b>Click Here</b></a>.... To Download Full Version
<?php
if(isset($_SESSION['email']) && isset($_SESSION['pwd'])){
echo "<b><big><a href='download.php'>Click Here</a></big></b>";	
} else {
echo "<b><big><a href='javascript:doLog();'>Click Here</a></big></b>";	
}
?>

</div>