<?php

include "db_information.php";
//쿼리
$query="select * from membership order by id asc";
$result=mysql_query($query,$conn);


// $re = mysql_fetch_array($result); 연관배열로 갖고 옴.
// $re['id']; $rd['u_id']; $re['id_pass'];
$count = mysql_num_rows($result);

echo $re[0];

?>
<table border=1; cellspacing=0; valign="top">
	<tr bgcolor="pink"><td>id</td><td>name</td><td>gender</td><td>user_id</td><td>user_pass</td><td>email</td><td>phone</td><td>hobby</td></tr>
<?php
	for($i=0;$i<$count;$i++){
	$re = mysql_fetch_row($result);
	echo "<tr><td>".$re[0]."</td>";
	echo "<td>".$re[1]."</td>";
	echo "<td>".$re[2]."</td>";
	echo "<td>".$re[3]."</td>";
	echo "<td>".$re[4]."</td>";
	echo "<td>".$re[5]."</td>";
	echo "<td>".$re[6]."</td>";
	echo "<td>".$re[7]."</td></tr>";
}

?>
</table>