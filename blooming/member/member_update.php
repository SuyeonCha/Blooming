<meta charset="utf-8">
<?php
$dd = $_GET['abc'];
echo $dd;
?>
<table color=red width=880 bgcolor=>
			<tr>
				<td align="center" width=130 bgcolor="#f9f473" >이름</td>
				<td bgcolor="#fffdc7"><input class=ia type=text placeholder="이름" maxlength=10 style="width:100px;"></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">생년월일</td>
				<td bgcolor="#fffdc7"><input class=ia type=text placeholder="년(4자)" maxlength=4 style="width:100px;"> <input class=ia type=text placeholder="월" maxlength=4 style="width:70px; "> <input class=ia type=text placeholder="일" maxlength=4 style="width:70px; "></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">Password</td>
				<td bgcolor="#fffdc7"><input type=password name="pass" value""></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">e-mail입력</td>
				<td bgcolor="#fffdc7"><input type=text name="emid" value="" style="width:100px;"> @ <input type=text name="이메일주소" value="" style="width:100px;" > <select name="emju"><option name="naver" value="naver.com">naver.com</option><option name="daum" value="daum.net">daum.net</option><option name="gmail" value="gmail.com">gmail.com</option></select><br/><sub>ex)pen10@naver.com</sub></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">핸드폰입력</td>
				<td bgcolor="#fffdc7"><select name="phone"><option value"010">010</option><option value"011">011</option><option value"019">019</option><option value"016">016</option></select> <input type=text name="phone2"value="" size=5> <input type=text name="phone3" value="" size=5></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#f9f473">취미</td>
				<td bgcolor="#fffdc7"><select name="hobby"><option value="취미">취미</option><option value="수영">수영<option value="음악듣기">음악듣기</option><option value="독서">독서</option><option value="산책">산책</option>
			</tr>
			<tr align="left">
				<td colspan=3><input type=checkbox name="ch" value="">약관에 동의 하시겠습니까?</td>
			</tr>
			<tr align="center">
				<td colspan=3><input type=submit name="go" value="회원가입" onclick="success()"></td>
			</tr>
		</table>