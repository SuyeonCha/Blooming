<meta charset="UTF-8">
<head>
<script type="text/javascript">
function possible(){
	var id=document.userinput.id.value;

	var url="check_id.php?id="+id;
	window.open(url,'','width=500, height=150, left= 30, top=200, scrollbars=no');
}

function success(){
	alert("가입완료");
}
</script>
</head>
<center>
<fieldset style="width:800; height:313">
<legend><b>회원가입</b></legend>
<hr>
	<form method=post action=member_result.php name="userinput">
		<table color=red width=880 bgcolor=>
			<tr>
				<td align="center" width=130 bgcolor="#f9f473" >*이름</td>
				<td bgcolor="#fffdc7"><input type=text name="na" value"" maxlength=10 ><input type=radio name="who" value=1>여자  <input type=radio  name="who" value=0>남자</td>
				<td bgcolor="#fffcb4" rowspan=7 valign="top" align="center"><img src="img/img5.png" ></img><br/><br/><input type=file value="사진등록"></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">*아이디</td>
				<td bgcolor="#fffdc7"><input type=text name="id" maxlength=18>  <input type=button name="중복확인" value="*아이디중복확인"  onclick="possible()"></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">*Password</td>
				<td bgcolor="#fffdc7"><input type=password name="pass" value""></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">*재입력</td>
				<td bgcolor="#fffdc7"><input type=password name="repass" value""></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">*e-mail입력</td>
				<td bgcolor="#fffdc7"><input type=text name="emid" value=""> @ <input type=text name="이메일주소" value=""> <select name="emju"><option name="naver" value="naver.com">naver.com</option><option name="daum" value="daum.net">daum.net</option><option name="gmail" value="gmail.com">gmail.com</option></select><br/><sub>ex)pen10@naver.com</sub></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">*핸드폰입력</td>
				<td bgcolor="#fffdc7"><select name="phone"><option value"010">010</option><option value"011">011</option><option value"019">019</option><option value"016">016</option></select> <input type=text name="phone2"value="" size=5> <input type=text name="phone3" value="" size=5></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">*취미</td>
				<td bgcolor="#fffdc7"><select name="hobby"><option value="취미">취미</option><option value="수영">수영<option value="음악듣기">음악듣기</option><option value="독서">독서</option><option value="산책">산책</option>
			</tr>
			<tr align="left">
				<td colspan=3><input type=checkbox name="ch" value="">약관에 동의 하시겠습니까?</td>
			</tr>
			<tr align="center">
				<td colspan=3><input type=submit name="go" value="회원가입" onclick="success()"></td>
			</tr>
		</table>
		<hr>
	</form>
</fieldset>
<a href="naverlogin.php">로그인</a>    <a href="">회원정보변경</a>    <a href="member_all.php">모든회원 보기</a>     <a href="">회원탈퇴</a>
</center>	