<?php
//设置页面内容是html编码格式是utf-8
header("Content-Type: text/plain;charset=utf-8"); 
	$filename="newfile.txt";
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, $_POST["content"]);
	fclose($myfile);
	$filepath="http://localhost/ajax_example/newfile.txt";
	session_start();
	$_SESSION["temp"]="succ";
	header("Location:http://localhost/ajax_example/result.html");
?>
