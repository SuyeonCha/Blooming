<meta charset="utf-8">
<?php
include "db_information.php";
$n = $_GET['abc'];
$result=mysql_query("select * from board where id=".$n,$conn);
$re = mysql_fetch_row($result);

$email=$_POST['email'];
$title=$_POST['title'];
$comment=$_POST['comment'];
$pass=$_POST['pass'];


if($pass == $re[3]){
	$query = "update board set email='$email', title='$title', comment='$comment' WHERE id=$re[0]";
	mysql_query($query	,$conn);
	echo "<script> alert('수정완료 되었습니다.');</script> <meta http-equiv='Refresh' content='1 URL=list.php'>";
}
else{
	echo "<script> alert('비밀번호가 틀립니다.'); history.go(-1);</script>";
}	
?>