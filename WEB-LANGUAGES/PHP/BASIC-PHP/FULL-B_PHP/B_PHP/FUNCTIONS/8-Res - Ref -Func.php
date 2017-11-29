<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Resource & Reference Variables Functions in PHP</h1><div>";

function test($x,&$y){
	$x+= 50;
	$y+= 20;
	echo 'Inside Func $x = ',$x,'<br>';
	echo 'Inside Func $y = ',$y,'<hr>';
}
$a = 100;
$b = 200;
	echo 'Outside Func $a = ',$a,'<br>';
	echo 'Outside Func $b = ',$b,'<hr>';
	
	test($a,$b);
	
	echo 'Outside Func $a = ',$a,'<br>';
	echo 'Outside Func $b = ',$b,'<hr>';
/*
$a = 10;
$b = $a; // Ref
$c = &$a; // Res

echo '<h3>Reference Variable </h3>';
echo '<b>Original Value $a</b> = ',$a,', Reference Variable $b = ',$b,'<br>';
$a = 'Raj';
echo '<b>Original Value $a</b> = ',$a,', Reference Variable $b = ',$b,'<br>';
$a = 'Ajay';
$b = 'Sunil';
echo '<b>Original Value $a</b> = ',$a,', Reference Variable $b = ',$b,'<br>';

echo '<h3>Resource Variable </h3>';
echo '<b>Original Value $a</b> = ',$a,', Resource Variable $c = ',$c,'<br>';
$a = 100;
echo '<b>Original Value $a</b> = ',$a,', Resource Variable $c = ',$c,'<br>';
$a = 'Ramesh';
$c = 'Suresh';
echo '<b>Original Value $a</b> = ',$a,', Resource Variable $c = ',$c,'<br>';

*/
?>
<pre>





















</pre>
Last Line