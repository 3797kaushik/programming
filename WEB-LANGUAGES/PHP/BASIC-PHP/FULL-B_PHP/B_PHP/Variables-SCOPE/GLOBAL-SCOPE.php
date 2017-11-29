<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Global Scope Variable in PHP</h1><div>";
/*$a = 10;
	function test(){
		global $a;
		echo '<b>Inside Func</b> $a = ',@$a,'<br>';
	}
		echo '<b>Outside Func</b> $a = ',@$a,'<br>';
	test();
*/
	function test(){
		global $a;
		$a = 10;	
		echo '<b>Inside Func</b> $a = ',@$a,'<br>';
	}
	test();
		echo '<b>Outside Func</b> $a = ',@$a,'<br>';
?>
