<meta charset="utf-8">
<?php
include "db_information.php";

$name = $_POST['name'];

$a = $_FILES['userfile']['name'];
$aa = $_FILES['userfile']['tmp_name'];
$b = $_FILES['userfile']['type'];
$c = $_FILES['userfile']['size'];

if($b == 'image/jpeg' || $b == 'image/png'){
move_uploaded_file($aa,'img/'.$a);
$query = "insert into gallery values('','$name','$a',$c,'$b')";
mysql_query($query	,$conn);
echo "파일이 업로드 되었습니다."."<br/>";
}
else{
	echo "<script> alert('이미지가 아닌 파일은 업로드 할 수 없습니다.'); history.go(-1);</script>";
}
?>