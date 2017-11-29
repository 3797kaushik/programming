<?php
if(isset($_POST['submit'])){
echo 'Name = ',$n = $_REQUEST['fname'],'<br>';
echo 'Email = ',$e = $_POST['email'],'<br>';
echo 'DOB = ',$d = $_POST['dob'],'<br>';
echo 'Password = ',$p = sha1($_POST['pwd'],true),'<br>';
echo 'Gender = ',$g = $_POST['gend'],'<br>';
echo 'Country = ',$c = $_POST['coun'],'<br>';
echo 'Address = ',$a = $_POST['addr'],'<hr>';
echo 'Language = ',$l = implode(',',$_POST['lang']);
} else {
header("location:FORMS.php");
}
