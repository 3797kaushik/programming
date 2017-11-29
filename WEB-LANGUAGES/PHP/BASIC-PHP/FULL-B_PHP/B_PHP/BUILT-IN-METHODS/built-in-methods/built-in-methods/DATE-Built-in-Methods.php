<link href='style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1><span>Date Methods  in PHP</span></h1><div>";
echo 'Pre Defined Date Char - ',date('l'),'<br>';
echo '&copy; 2010-2015, example.com , Allrights reserved.<br>';
echo '&copy; 2010-',date('Y'),', example.com , Allrights reserved.<hr>';

echo 'Time Zone Configured Default : <b>',date_default_timezone_get(),'</b><br>';
echo 'Present Date & Time = ',date('dS-F-Y, h:i:s A'),'<hr>';

date_default_timezone_set('America/Los_Angeles');
echo 'Time Zone Set : <b>',date_default_timezone_get(),'</b><br>';
echo 'Present Date & Time = ',date('l, dS-F-Y, h:i:s A'),'<hr>';

date_default_timezone_set('Asia/Calcutta');
echo 'Time Zone Set : <b>',date_default_timezone_get(),'</b><br>';
echo 'Present Date & Time = ',date('l, dS-F-Y, h:i:s A'),'<hr>';

echo 'Event is On : ',date('l, dS-F-Y, h:i:s A',mktime(18,30,00,10,4,2015)),'<hr>';

var_dump(checkdate(2,29,2016));
echo '</div>';

?>