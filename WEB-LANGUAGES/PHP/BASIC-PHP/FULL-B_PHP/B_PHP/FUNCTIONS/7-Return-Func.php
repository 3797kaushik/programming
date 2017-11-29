<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Return Functions in PHP</h1><div>";

function test(){
	echo "Line 01<br>";
	echo "Line 02<br>";
	echo "Line 03<br>";
	return 10;
}
echo "<h3>Print Only func Printing Methods</h3>";
test();

echo "<h3>Print func Printing Methods & Return</h3>";
echo test();

echo "<h3>Print Only Return Values Methods</h3>";
$x = test();

echo 'Value of Return = ',$x,'<br>';
echo 'Value of Return = ',$x,'<br>';
echo 'Value of Return = ',$x,'<br>';
?>
<pre>





















</pre>
Last Line