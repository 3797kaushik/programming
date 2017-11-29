<link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<link href='style1.css' type='text/css' rel='stylesheet'/>
<h2 align='center'>Array Built-in-Methods Methods in PHP</h2>
<?php
function r($arr,$func=''){
	if(!empty($func)){
		echo "<h1>$func</h1>";
	}
	foreach($arr as $k=>$v){
		echo "<div>$k = $v</div>";
	}
}
echo "<h1>Lenght of Given Array in php</h1><div>";
$a = array(10,20,30);
echo 'Length of Given Array Using Count = ',count($a),'<br>';
echo 'Length of Given Array Using sizeof = ',sizeof($a),'<br>';

echo "</div><h1>Sum & Product of Given Array</h1><div>";
echo 'Sum of Given Array  = ',array_sum($a),'<br>';
echo 'Prouct of Given Array  = ',array_product($a),'</div>';

$b = array('Name'=>'Rajesh','Email'=>'raj@gmail.com','City'=>'Pune','Country'=>'India','Status'=>'Active','Mobile'=>'9823898767');
r($b,'Original Array');

r(array_change_key_case($b,CASE_LOWER),'Case Lower');

r(array_change_key_case($b,CASE_UPPER),'Case Upper');

r(array_change_key_case(array_flip($b),CASE_UPPER),'Flip the Given Array');

$a = array(10,15,10,5,15);
$b = array(10,5,20);
r(array_merge($b,$a),'Merge the Given Array');

r(array_intersect($a,$b),'Intersect the Given Array');

r(array_diff($b,$a),'Difference the Given Array');

r(array_unique($a),'Unique the Given Argumented Value of Arrays');

$a = array('Name','Email','City','Country');
$b = array('Rajesh','raj@gmail.com','Pune','India');
r($b,'Original Array');
r(array_flip(array_combine($b,$a)),'Combine the Given Arrays with Keys & Values');

$oa = $sa = $as = $ks = array('Name'=>'Rajesh','Email'=>'raj@gmail.com','City'=>'Pune','Country'=>'India','Status'=>'Active','Mobile'=>'9823898767');
r($oa,'Original Array');

sort($sa);
r($sa,'Sort the Given Array');
rsort($sa);
r($sa,'Reverse the Given Sorted Array');

asort($as);
r($as,'Associative Sort Array');
arsort($as);
r($as,'Reverse the Associative Sort Array');

ksort($ks);
r($ks,'Key Sorted Array');

krsort($ks);
r($ks,'Reverse Key Sort Array');

$a = array(10,20,'Rajesh');
r($a,'Original Array');

array_unshift($a,2,5);
r($a,'Unshift Method in Arrays');

array_shift($a);
r($a,'Shift Method in Arrays');

array_push($a,'Anil','Sunil');
r($a,'Push Method in Array');

array_pop($a);
r($a,'Pop Method in Arrays');

$a = array('raj@gmail.com','anil@msn.com','math.1@yahoo.co.in','sunil@yahoo.com','amith@yahoo.com','Kavitha@msn.com');
r($a,'Original Array');

$w = implode(',',$a);

?><br><br><div>
To : <input type='text' name='email' value='<?php echo $w;?>' size='120'/></div>
<?php
echo "<h1>Chunk Method in Php </h1>";
r($a);
echo '<pre style="letter-spacing:3px;font-size:22px;margin-left:50px;">';
$d = array_chunk($a,3);
print_r($d);
echo '</pre>';

 $a = array('Name'=>'Rajesh','Email'=>'raj@gmail.com','City'=>'Pune','Country'=>'India','Status'=>'Active','Mobile'=>'9823898767');
r($a,'Original Array');

echo '<h1>array_key_exists</h1><div>';
echo 'Key Exist or Not = ',var_dump(array_key_exists('Email',$a)),'<br>';
echo 'Key Exist or Not = ',var_dump(array_key_exists('Address',$a)),'<br>';
echo 'Key Exist or Not = ',var_dump(array_key_exists('Mobile',$a)),'<br>';

echo '</div><h1>array_search</h1><div>';
echo 'array_search = ',array_search('raj@gmail.com',$a),'<br>';
echo 'array_search = ',var_dump(array_search('Mumbai',$a)),'<br>';

echo '</div><h1>in_array</h1><div>';
echo 'in_array = ',var_dump(in_array('raj@gmail.com',$a)),'<br>';
echo 'in_array = ',var_dump(in_array('Mumbai',$a)),'</div>';

r($a,'Original Array');
r(array_reverse($a),'Reverse of the Given Array');

r($a,'Original Array');
r(array_keys($a),'Print Only Keys of An Array');
r(array_values($a),'Print Only Values of An Array');

$b = array('Born','Child','Teen','Father','Grand Father');
r($b,'Original Array');
echo '<h1>Current , Key , Next , Prev , End , Reset</h1><div>';
echo 'Current Pointer Value Located at = <b>',current($b),'</b> , And its Key =  ',key($b),'<br>';

next($b);
echo 'Current Pointer Value Located at = <b>',current($b),'</b> , And its Key =  ',key($b),'<br>';

next($b);
echo 'Current Pointer Value Located at = <b>',current($b),'</b> , And its Key =  ',key($b),'<br>';

prev($b);
echo 'Current Pointer Value Located at = <b>',current($b),'</b> , And its Key =  ',key($b),'<br>';

end($b);
echo 'Current Pointer Value Located at = <b>',current($b),'</b> , And its Key =  ',key($b),'<br>';

reset($b);
echo 'Current Pointer Value Located at = <b>',current($b),'</b> , And its Key =  ',key($b),'</div>';

$a = array('Name'=>'Rajesh','Age'=>32);
r($a,'Original Array');

r(EACH($a),'Each Method in Arrays');
r(EACH($a),'Each Method in Arrays');
reset($a);
r(EACH($a),'Each Method in Arrays');

echo "<h1>List Method in Arrays</h1><div>";
$a = array('Kavitha','9876587897','Apple','i-6','65');

list($name,$mob,$brand,$product,$off) = $a;
echo "Hi <b>$name !</b><br>";
echo "Your Registered Mobile is <b>: $mob</b><br>";
echo "Last Product Search was <b>$brand</b> which is <b>$product</b><br>";
echo "<br><big>Hey $name this is One Time Discount Offer Only to You which is : <span style='color:red;font-family:impact;'>$off %</span>... So Be Hurry Up... Limited Period<br>";
?>
<pre>
















</pre>