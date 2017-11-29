<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Local Scope Variable in PHP</h1><div>";
	function test(){
		$a = 10;
	echo 'Inside Func <b>$a = ',$a,'</b><br>';
	}
	test();
	
	echo 'Outside Func <b>$a = ',$a,'</b><br>';
?>