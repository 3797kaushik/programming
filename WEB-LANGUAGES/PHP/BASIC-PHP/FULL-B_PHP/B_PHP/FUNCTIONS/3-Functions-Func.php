<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Functions Functions in PHP</h1><div>";

function parentF(){
	echo 'I am Top Parent Content<br>';
 if(!function_exists('childF')){	
	function childF(){
		echo 'I am Child Func inside Parent<br>';
	}
 }
 childF();
	echo 'I am Last Parent Content<hr>';
}
parentF();
parentF();
//parentF();
childF();
?>
<pre>





















</pre>