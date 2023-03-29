<meta charset="utf-8">
<head>
<META http-equiv="page-enter" content="IE=edge,chrome=1"> 
</head>
<style type="text/css">
.fb{color:white; font-weight:bold;}
.fb2{font-size:9pt;};
</style><center>
<form method=post action=insert.php>
<table border=1 cellspacing=0>
	<tr align=center bgcolor="#360033">
		<td class=fb colspan=2 >글 쓰 기</td>
	</tr>
	<tr>
		<td style="width:100px;">이름</td>
		<td><input type=text name="name" value="" style="width:200px;"></td>
	</tr>
	<tr>
		<td>이메일</td>
		<td><input type=text name="email" value=""  style="width:200px;"></td>
	</tr>
	<tr>
		<td>비밀번호</td>
		<td class=fb2><input type=password name="pass" value=""  style="width:100px;">(수정, 삭제시 반드시 필요)</td>
	</tr>
	<tr>
		<td>제목</td>
		<td><input type=text name="title" value=""  style="width:500px;"></td>
	</tr>
	<tr>
		<td>내용</td>
		<td><textarea name="comment" rows=10 cols=80></textarea></td>
	</tr>
	<tr>
		<td align=center colspan=2><input type=submit name="save" value="글 저장하기"><a>  </a><input type=submit name="return" value="다시쓰기">
</table>
</center>
</form>