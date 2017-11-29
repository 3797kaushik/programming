<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Temp Casting in PHP</h1><div>";
$c = "7452.145 $";
echo 'Original Value <b>$c = ',$c,'</b><br> And Datatype = ',var_dump($c),'<hr>';
echo 'Change to <b>Float</b> = ',(float)$c,'<br>';

echo 'Change to <b>Euro Curr</b> = &euro; ',(float)$c,'<br>';
echo 'Change to <b>Euro Curr</b> = &#8377; ',(float)$c,'<br>';
echo 'Change to <b>Int</b> = ',(int)$c,'<hr>';

echo 'Original Value <b>$c = ',$c,'</b><br> And Datatype = ',var_dump($c),'<br>';

echo "</div><h1>settype(varname,'datatype') Casting in PHP</h1><div>";

echo 'Original Value <b>$c = ',$c,'</b><br> And Datatype = ',var_dump($c),'<br>';

echo 'Original Value <b>$c = ',$c,'</b><br>';
settype($c,'float');
echo 'Original Value <b>$c = ',$c,'</b><br>';

settype($c,'int');
echo 'Original Value <b>$c = ',$c,'</b><br>';

settype($c,'boolean');
echo 'Original Value <b>$c = ',$c,'</b><br>';

settype($c,'int');
echo 'Original Value <b>$c = ',$c,'</b><br>';
echo 'Original Value <b>$c = ',$c,'</b><br>';
echo 'Original Value <b>$c = ',$c,'</b><br>';
echo 'Original Value <b>$c = ',$c,'</b><br>';
?>
<pre>





















</pre>