<?php

if(isset($_POST['submit']) && $_FILES['file']['size']>0){
	$tmp = $_FILES['file']['tmp_name'];
	if(is_uploaded_file($tmp)){
		$oname = $_FILES['file']['name'];
		$name = getRand(15).'-'.$oname;
		$desc = "img/users/".$name;
		
		if(move_uploaded_file($tmp,$desc)){
			echo "Image Got Uploaded Successfully at : <b>".$desc.'</b><br>';
		} else {
			echo "Unable to Move... Path is Set Wrong";
		}
	} else {
		echo "File Unable to Upload ... Retry";
	}
} else {
	header("location:file.php");
}


function getRand($size){
 $str = str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~`'@#$%^&*()__++");
 return sha1(md5(substr($str,0,$size),true));
}


?>











<!-- 
echo "File Name = ",$_FILES['file']['name'],'<br>';
echo "Tmp Path = ",$_FILES['file']['tmp_name'],'<br>';
echo 'Size of File = ',$_FILES['file']['size']/1024,' - KBytes<br>';
echo "File Type = ",$_FILES['file']['type'],'<br>';
echo "Error No = ",$_FILES['file']['error'],'<br>';
 -->