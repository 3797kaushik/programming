<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Local Scope Variable in PHP</h1><div>";

	function test(){
		$a = 10;
		static $b = 20;
	echo 'Inside Func <b>$a = ',$a,'</b><br>';
	echo 'Inside Func <b>$b = ',$b,'</b><hr>';
		$a++;
		$b++;
	}
	test();
	test();
	test();
	
?>
<pre>











</pre>
Hello i am Last Line.<br>
<?php
test();
?>