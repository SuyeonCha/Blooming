<meta charset="utf-8">
<?php
session_start();
if(empty($_SESSION['userid'])){
die("로그인이 필요합니다.");
}
?>
접속된 아이디는 <?php echo $_SESSION['userid'] ?> 입니다.