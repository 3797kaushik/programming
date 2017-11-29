<?php
if(isset($_GET['submit'])){
echo 'Name = ',$n = $_REQUEST['fname'],'<br>';
echo 'Email = ',$e = $_GET['email'],'<br>';
echo 'DOB = ',$d = $_GET['dob'],'<br>';
echo 'Password = ',$p = sha1($_GET['pwd'],true),'<br>';
echo 'Gender = ',$g = $_GET['gend'],'<br>';
echo 'Country = ',$c = $_GET['coun'],'<br>';
echo 'Address = ',$a = $_GET['addr'],'<hr>';
echo 'Language = ',$l = implode(',',$_GET['lang']);
} else {
header("location:FORMS.php");
}
