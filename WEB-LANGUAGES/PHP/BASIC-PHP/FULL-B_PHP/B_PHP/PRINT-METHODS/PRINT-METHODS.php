<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Echo Print Method in PHP</h1><div>";
$a = 10; $b = 20; $c = 30;
echo 'As a <b>COMMAND Line Using ,</b> ',$a,$b,$c,'<br>';
echo 'AS a <b>Function Using , </b>',($a),'<br>';
echo 'AS a <b>Function Using . </b>',($a.$b.$c),'<br>';

echo "</div><h1>Print Printing Method in PHP</h1><div>";
print 'As a <b>COMMAND Line Using , </b>'; print $a; print $b;
print '<br>AS a <b>Function Using , </b>';print ($a);

print '<br>AS a <b>Function Using . </b>';print ($a.$b.$c);print '<br>';

echo "</div><h1>Print_r(var name) Printing Method in PHP</h1><div>";
$a = array(10,20,30,'Raj','Kung Fu');
$b = array(1,true,'','1','0',false,null,'null',0);
$d = array('Name'=>'Rajesh','Email'=>'raj@gmail.com','City'=>'Pune','Mobile'=>'8758784858','Aadhar Card'=>'8745-8741-4754','Age'=>32);
echo '<pre>';
print_r($a);
echo '</pre><hr>';

echo '<pre>';
print_r($b);
echo '</pre><hr>';

echo '<pre>';
print_r($d);
echo '</pre><hr>';

echo "</div><h1>Var_dump(var name) Printing Method in PHP</h1><div>";
echo 'Value of <b>$c = ',$c,'</b>, And its Datatype = ',var_dump($c),'<hr>';

echo '<pre>';
var_dump($b);
echo '</pre><hr>';

echo '<pre>';
var_dump($d);
echo '</pre>';


echo "</div><h1>printf('datatype',Args) Printing Method in PHP</h1><div>";
printf('INT = %d<br>FLOAT = %.2f<br>STRING = %s<br>ASCII Symbol = %c',9.25,11.129,'Rajesh',97);
?>
<pre>



















</pre>