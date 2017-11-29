<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Argument Functions in PHP</h1><div>";

function test($x,$y){
	echo 'Value of $x	 = ',$x,'<br>';
	echo 'Value of $y = ',$y,'<hr>';
}
//test('Rajesh','Ajay');
//test(10,30);
test('Ramesh','Kiran','David','Ajay','Maddy');
@test('Rajesh');
@test();
?>
<pre>





















</pre>
Last Line