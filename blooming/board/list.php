<meta charset="utf-8">

<style type="text/css">
.fb{color:white; font-weight:bold; background-color:#360033}
.b{border-right-width:0px}
.bb{border-left-width:0px}
</style>
<?php
include "db_information.php";

$query = "select *from board";
$result = mysql_query($query,$conn);

$num = mysql_num_rows($result);

?>
<center>
여러분~ 함께 글을 써보아요!<br/><br/>
<table border=1 cellspacing=0 align="center">
	<tr class=fb  align="center">
		<td>번호</td><td>제목</td><td>글쓴이</td><td>날짜</td><td>조회수</td>
	</tr>
<?php
	for($i=0;$i<$num;$i++){
		$re = mysql_fetch_row($result);
		echo "<tr><td width=50px align='center'>".$re[0]."</td>";
		echo "<td width=300px cellspacing=4><a href=read.php?aa=$re[0]>".$re[4]."</a></td>";
		echo "<td width=100px  align='center'>".$re[1]."</td>";
		echo "<td width=120px align='center'>".$re[7]."</td>";
		echo "<td width=50px  align='center'>".$re[8]."</td></tr>";
}
?>
<form method=post action=search.php>
<tr align=center><td class=b colspan=4>
<select name="s"><option value="제목" name="title">제목</option><option value="작성자" name="writer">작성자</option><option value="제목+내용" name="content">제목+내용</option></select> <input type=text name='se' value="" style="width:110px"> <input type=submit name='go' value="검색"></td><td class=bb><a href=write.php align=right>글쓰기</a></td></tr>
</table>
</form>
</center>