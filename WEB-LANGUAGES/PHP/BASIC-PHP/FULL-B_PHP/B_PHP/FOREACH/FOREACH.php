<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Variables in PHP</h1><div>";
$a = 10;
$a = 100;
echo 'Variable $a = ',$a,'<br>';

echo "</div><h1>Numbered* Arrays in PHP</h1><div>";
$b = array(10,20,30,'Rajesh','Madhu','4515458',10=>50,'Emp id'=>'548');
echo '<pre>';
print_r($b);
echo '</pre>';
echo 'At <b>3 Index</b> = ',$b[3],'<hr>';
echo 'Length of Array = ',count($b),'<br>';
echo 'Length of Array = ',sizeof($b),'<br>';

echo "</div><h1>Print Using For Loops in PHP</h1><div>";
for($i=0;$i<count($b);$i++){
	echo "$i = ",$b[$i],'<br>';
}


echo "</div><h1>Associative Arrays in PHP</h1><div>";

$c = array('Name'=>'Rajesh','Age'=>32,'City'=>'Hyderabad','Sister'=>'Madhu','Driving Lic'=>'4515458','Mob'=>'8758785895');
echo '<pre>';
print_r($c)	;
echo '</pre>';

echo "</div><h1>Print Only Values of Array using foreach</h1><div>";
foreach($c as $v){
	echo $v.'<br>';
}

echo "</div><h1>Print Keys & Values of Array using foreach</h1><div>";
foreach($c as $k=>$v){
	//echo $k.' : '.$v.'<br>';
	echo "$k <big><big>:</big></big> $v<br>";
}
echo '<hr><pre>';
print_r($c);
echo '<pre>';

echo "</div><h1>Mixed Array using foreach</h1><div>";

$x = 'Aadhar Card';
$y = '7458-5487-5848';
define('A','INDEX');
define('B','VALUES');
$d = array(10,11,'Name'=>'Raj','Email'=>'raj@gmail.com',0=>'ZERO','1'=>'ONE',5=>500,5.999=>600,6=>60,-9=>'Negative Value','0'=>0,false=>'Bool False',true=>'Bool True',90,1=>'Int One',50=>1000,''=>'Empty Index',500,null=>'Null Index',$x=>$y,A=>B);

foreach($d as $k=>$v){
	echo "$k : $v<br>";
}
?>
<pre>
























</pre>