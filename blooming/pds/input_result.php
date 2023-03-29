<meta charset="utf-8">
<?php
include 'db_information.php';

$name=$_POST['name'];
$title=$_POST['title'];

$a = $_FILES['ufile']['name'];
$b = $_FILES['ufile']['tmp_name'];
$c = $_FILES['ufile']['size'];
move_uploaded_file($_FILES['ufile']['tmp_name'],'upload/'. $_FILES['ufile']['size']);

$query="insert into pds values('','$name','$title','$a','$b',$c)";
mysql_query($query	,$conn);
echo "파일이 업로드 되었습니다.<br/> <meta http-equiv='Refresh' content='1 URL=list.php'>";
?>