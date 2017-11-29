<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Variables Validations in PHP</h1><div>";
$a = 10;
echo '<h3>Isset Function</h3>';
echo 'Is Variable <b>$a</b> Exist or Not : ',var_dump(isset($a)),'<br>'; 
echo 'Is Variable <b>$b</b> Exist or Not : ',var_dump(isset($b)),'<br>'; 

echo '<h3>Unset Function</h3>';
echo 'Is Variable <b>$a</b> Exist or Not : ',var_dump(isset($a)),'<br>'; 

unset($a);

echo 'Is Variable <b>$a</b> Exist or Not : ',var_dump(isset($a)),'<br>'; 

echo '<h3>Empty Function</h3>';
$c = 'Raj';
$c = "";
echo 'Is Variable <b>$c</b> Exist or Not : ',var_dump(isset($c)),'<br>'; 
echo 'Is Variable Value Empty or Not : ',var_dump(empty($c)),'<hr>';

$d = 'Andi.jpg';
if(isset($d)){
echo 'Is Variable Value Empty or Not : ',var_dump(empty($d)),'<br>';
}

#echo 'the variable $b is not exist but its empty value is ',var_dump(empty());
?>