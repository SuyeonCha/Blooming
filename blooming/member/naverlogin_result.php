<meta charset="utf-8">
<?php
  include "db_information.php";
  $id=$_POST[user_id];
  $pw=$_POST[user_pass];
  $query="select * from membership";
  $result=mysql_query($query, $conn); //result의 모양은 table 형태
  $count=mysql_num_rows($result);
  for($i=0; $i<$count; $i++) {
    $re=mysql_fetch_row($result);
    if($id==$re[3]) {
      if($pw==$re[4]) {
        echo "로그인되었습니다<br/>";
		break;
		echo $re[0];
      }
    }else if($i==$count-1) {
      echo "<script>alert('로그인 실패');</script>";
      echo "로그인실패";
    }
  }
?>
<a href="member_update.php?abc=<?php echo $re[0] ?>">회원정보변경</a>
<a href='member_all.php'>모든회원 보기</a>
<a href=''>회원탈퇴</a>