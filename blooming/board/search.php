<meta charset="utf-8">
<style type="text/css">
.fb{color:white; font-weight:bold; background-color:#360033}
.b{border-right-width:0px}
.bb{border-left-width:0px}
</style>
<table border=1 cellspacing=0 align="center">
	<tr class=fb  align="center">
		<td>번호</td><td>제목</td><td>글쓴이</td><td>날짜</td><td>조회수</td>
	</tr>
<?php
include "db_information.php";

$kind=$_POST['s'];
$se=$_POST['se'];
if($kind=='제목'){
	$query="select * from board where title like '%$se%'";
	$result= mysql_query($query,$conn);
	$num = mysql_num_rows($result);
	for($i=0;$i<$num;$i++){
		$re = mysql_fetch_row($result);
		echo "<tr><td width=50px align='center'>".$re[0]."</td>";
		echo "<td width=300px cellspacing=4><a href=read.php?aa=$re[0]>".$re[4]."</a></td>";
		echo "<td width=100px  align='center'>".$re[1]."</td>";
		echo "<td width=120px align='center'>".$re[7]."</td>";
		echo "<td width=50px  align='center'>".$re[8]."</td></tr>";
	}
}
else if($kind=='작성자'){
	$query="select * from board where uname like '$se'";
	$result= mysql_query($query,$conn);
	$num= mysql_num_rows($result);
	for($i=0;$i<$num;$i++){
		$re = mysql_fetch_row($result);
		echo "<tr><td width=50px align='center'>".$re[0]."</td>";
		echo "<td width=300px cellspacing=4><a href=read.php?aa=$re[0]>".$re[4]."</a></td>";
		echo "<td width=100px  align='center'>".$re[1]."</td>";
		echo "<td width=120px align='center'>".$re[7]."</td>";
		echo "<td width=50px  align='center'>".$re[8]."</td></tr>";
	}

}
else if($kind=='제목+내용'){
	$query="select * from board where title like '%$se%' or comment like '%$se%'";
	$result= mysql_query($query,$conn);
	$num = mysql_num_rows($result);
	for($i=0;$i<$num;$i++){
		$re = mysql_fetch_row($result);
		echo "<tr><td width=50px align='center'>".$re[0]."</td>";
		echo "<td width=300px cellspacing=4><a href=read.php?aa=$re[0]>".$re[4]."</a></td>";
		echo "<td width=100px  align='center'>".$re[1]."</td>";
		echo "<td width=120px align='center'>".$re[7]."</td>";
		echo "<td width=50px  align='center'>".$re[8]."</td></tr>";
		}
}
?>
</table>