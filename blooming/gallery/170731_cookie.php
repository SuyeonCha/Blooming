<meta charset="utf-8">
<?php
if(empty($_COOKIE['userid'])){
die("로그인이 필요합니다.");
}
?>
접속된 아이디는 <?php echo $_COOKIE['userid'] ?> 입니다.