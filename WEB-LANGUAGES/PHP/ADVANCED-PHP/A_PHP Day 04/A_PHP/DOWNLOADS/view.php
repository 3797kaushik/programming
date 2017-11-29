<?php
$file="photograph.pdf";
$type="application/pdf";
$mode="inline";
header("Content-Type:".$type);
header("Content-Disposition:".$mode);
readfile($file);
?>