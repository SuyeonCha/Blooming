<?
function mb_basename($path){return end(explode('/',$path));}
$file_name=$_GET["file_name"];
$filepath='upload/'.$file_name;
$filename=mb_basename($filepath);
header("Pragma:public");
header("Expires:0");
header("Content-Type:application/octet-stream");
header("Content-Disposition:attachment; filename=\"$filename\"");
header("Content-Transfer-Encoding: binary");
Header("Content-Length: $filesize");
readfile($filepath);

?>