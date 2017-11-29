<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Overloaded Functions in PHP</h1><div>";

function test($x,$y){
	echo 'Value of $x	 = ',$x,'<br>';
	echo 'Value of $y = ',$y,'<hr>';
	echo 'Total Got Selected for this Offer = <b>',func_num_args(),'</b><br>';
	echo 'At Last = <b>',func_get_arg(4),'</b><hr>';
	
	echo '<h3>Using print_r</h3>';
	echo '<pre>';
	print_r(func_get_args());
	echo '</pre><hr>';
	
	echo '<h3>Using For Loops</h3>';
	for($i=0;$i<func_num_args();$i++){
	 echo "$i = ",func_get_arg($i),'<br>';
	}
	
	echo '<h3>Using Foreach Loops</h3>';
	foreach(func_get_args() as $k=>$v){
		echo "<b>$k</b> = $v<br>";
	}
}
//test('Rajesh','Ajay');
//test(10,30);
test('Ramesh','Kiran','David','Ajay','Maddy');

?>
<pre>





















</pre>
Last Line