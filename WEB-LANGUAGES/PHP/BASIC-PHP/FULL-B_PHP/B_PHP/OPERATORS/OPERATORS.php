<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Assignment Operators in PHP</h1><div>";
$a = 10;
echo 'Value of $a = ',$a,'<br>';

$name = 'Rajesh';
$name = $name.' Reddy';
$name .= ' M'; // $name = $name,' M';
echo 'My Full Name is <b>: ',$name,'</b><br>';

echo "</div><h1>Comparison Operators in PHP</h1><div>";
var_dump(10 == 10); echo '<br>';
var_dump(10 == '10'); echo '<br>';
var_dump(10 != '10'); echo '<br>';
var_dump(10 === '10'); echo '<br>';
var_dump(10 !== '10'); echo '<hr>';

var_dump(1 == '1'); echo '<br>'; // T
var_dump(true == '1'); echo '<br>'; // T
var_dump('1' == '1'); echo '<br>'; // T
var_dump('1' === '1'); echo '<br>'; // F *
var_dump('true' == 1); echo '<br>'; // T *
var_dump(true == ''); echo '<br>'; // F
var_dump(false == ''); echo '<br>'; // T 
var_dump(null == ''); echo '<br>'; // T
var_dump(false == '0'); echo '<br>'; // T
var_dump('' == '0'); echo '<br>'; // F
var_dump('' == ' '); echo '<br>'; // T *

echo "</div><h1>Arithmetic Operators in PHP</h1><div>";
$x = 10 ;
$y = 2;
echo 'Addition = <b>',$x+$y,'</b><br>';
echo 'Addition = <b>'.($x+$y).'</b><br>';
echo 'Minus = <b>',$x-$y,'</b><br>';
echo 'Divide = <b>',$x/$y,'</b><br>';
echo 'Multiply = <b>',$x*$y,'</b><br>';
echo 'Modulus = <b>',$x%$y,'</b><br>';

echo "</div><h1>POST / PRE [inc/dec] Operators in PHP</h1><div>";
$x = 10;
echo 'Original Value $x = ',$x,'<br>'; // 10
echo 'Post inc $x++ = ',$x++,'<br>'; // 10
echo 'Original Value $x = ',$x,'<br>'; // 11
echo 'Post dec $x-- = ',$x--,'<br>'; // 11
echo 'Original Value $x = ',$x,'<br>'; // 10
echo 'Pre inc ++$x = ',++$x,'<br>'; // 11
echo 'Original Value $x = ',$x,'<br>'; // 11
echo 'Pre dec --$x = ',--$x,'<br>'; // 10
echo 'Original Value $x = ',$x,'<br>'; // 10

echo "</div><h1>Relational Operators in PHP</h1><div>";
echo '<h3> < , <= , > , >= , <>[Not Equal to]</h3>';
var_dump(10 != '10'); echo '<br>';
var_dump(10 <> '10'); echo '<br>';

echo "</div><h1>Logical Operators in PHP</h1><div>";
echo '<h3> and , or</h3>';

var_dump(true && true); echo '<br>';
var_dump(true && false); echo '<br>';
var_dump(false and false); echo '<br>';
var_dump(true || true); echo '<br>';
var_dump(true || false); echo '<br>';
var_dump(false or false); echo '<br>';

echo "</div><h1>Conditional in PHP</h1><div>";
echo '<h3>if , if & else , if else if & else , switch
		Looping (while , do-while , for Loops)</h3>';
		
echo "</div><h1>Error Handling [ @ ]Operators in PHP</h1><div>";
//$z = '50 %Off'; // Notice Error
echo @$z;

echo @pow(2); // Warning Error

//@test(); // Fatel Error
?>
<pre>





















</pre>
&copy; 2016, example.com, Allrights reserved.