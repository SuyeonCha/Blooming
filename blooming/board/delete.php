<meta charset="utf-8">
<?php
include "db_information.php";
$di = $_GET['del'];
$result=mysql_query("select * from board where id=".$di,$conn);
$re = mysql_fetch_row($result);

$pass = $_POST['deletel'];

if($pass == $re[3]){
	$query="delete from board where id=$re[0]";
	mysql_query($query	,$conn);
	echo "<script> alert('삭제완료 되었습니다.');</script> <meta http-equiv='Refresh' content='1 URL=list.php'>";
}
else{
	echo "<script> alert('비밀번호가 틀립니다.'); history.go(-1);</script>";
}	
?>