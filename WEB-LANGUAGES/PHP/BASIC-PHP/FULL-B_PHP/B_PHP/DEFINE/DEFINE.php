<link href='../style.css' type='text/css' rel='stylesheet'/>
<?php
echo "<h1>Define in PHP</h1><div>";

define('a',100,true);
define('SITE_URL','http://flipkart.com',true);
define('SITE_NAME','Flipkart');
define('SITE_TITLE','A Place for Online Shopping');
define('IMG_URL',SITE_URL.'/img/');

$a = 10;

echo 'Variable $a = ',$a,'<br>';
echo 'Constant a = ',a,'<br>';
echo 'Constant A = ',A,'<hr></div>';

echo '<h2>Static Urls</h2><div>';
echo '<b>Url = </b> http://flipkart.com<br>';
echo '<b>Login = </b> http://flipkart.com/login.php<br>';
echo '<b>Tnc = </b> http://flipkart.com/terms.php<br>';
echo '<b>S Pro = </b> http://flipkart.com/img/mobile/samsung/s7edsku.png<br>';

echo '</div><h2>Dynamic Urls</h2><div>';
echo '<b>Url = </b> ',SITE_Url,'<br>';
echo '<b>Login = </b> ',SITE_URL,'/login.php<br>';
echo '<b>Tnc = </b> ',SITE_URL,'/terms.php<br>';
echo '<b>S Pro = </b> ',IMG_URL,'mobile/samsung/s7edsku.png<br><HR>';

?>
<title><?php echo SITE_NAME.' - '.SITE_TITLE;?></title>
<h2>Welcome to <?php echo SITE_NAME;?> Home Page</h2>
<h2>Welcome to <?php echo SITE_NAME;?> About Us Page</h2>
<h2>Welcome to <?php echo SITE_NAME;?> Contact Page</h2>
<p>Contact <?php echo SITE_NAME;?>...</br><br>
Po box : bla bla</p>
<h2>Welcome to Terms & Conditions of <b><?php echo SITE_NAME;?></b></h2>
<p> You shall be contracting with <b><?php echo SITE_NAME;?></b> Internet Private Limited and these terms and conditions including the policies constitute Your binding obligations, with <b><?php echo SITE_NAME;?></b></p>
<p>Data while registering on the Website as Registered User using the computer systems. <?php echo SITE_NAME;?> allows the User to surf the Website or making purchases without registering on the Website. The term "We", "Us", "Our" shall mean <?php echo SITE_NAME;?> Internet Private Limited.</p>
<pre>
























</pre>