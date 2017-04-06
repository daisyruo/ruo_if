<?php
header("Content-Type: text/plain;charset=utf-8"); 
$filename="newfile.txt";
$filename=realpath($filename);  //文件名
 $date=date("Ymd-H:i:m");
 Header( "Content-type:   application/octet-stream "); 
 Header( "Accept-Ranges:   bytes "); 
Header( "Accept-Length: " .filesize($filename));
 header( "Content-Disposition:   attachment;   filename= {$date}.xls"); 
 echo $date+'\n';
 // echo file_get_contents($filename);
 readfile($filename); 

?>