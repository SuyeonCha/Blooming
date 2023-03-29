<meta charset="utf-8">
<style>
.s{background-color:#360033; font-size:9pt; color:white; font-weight:bold;}
</style>
<?php
include "db_information.php";
$query = "select *from pds";
$result = mysql_query($query,$conn);
$num = mysql_num_rows($result);
?>
<form>
<table border=1 cellspacing=1 width=800px height=30px>
	<tr class=s>
		<td width=50px>번호</td><td width=180px>작성자</td><td>제목</td><td>파일</td>
	</tr>
<?php

for($i=0;$i<$num;$i++){
	$re = mysql_fetch_row($result);
	echo "<tr><td>".$re[0]."</td>";
	echo "<td>".$re[1]."</td>";
	echo "<td>".$re[2]."</td>";
	echo "<td><a href='down.php?file_name=".$re[3]."'>".$re[3]."</a></td></tr>";
	}
?>
</table>
</form>