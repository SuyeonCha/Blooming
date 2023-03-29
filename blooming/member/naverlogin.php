<meta charset="UTF-8">
<head>
<style type="text/css">
.sub{border-width:0px; background-color:#33ee55; color:#ffffff; font-weight:bold; font-family:돋움;}
.left{float:left; }
body{font-size:9pt; color:#33333;}
.fb{color:#333333; font-family:돋움; font-size:9pt;}
.dt{border:1px solid; }
a:link{ text-decoration:none; color:#333333; font-family:돋움; font-size:9pt;}
a:visited{text-decoration:none; color:#333333; font-family:돋움; font-size:9pt;}
a:hover{text-decoration:underline; color:#333333; font-family:돋움; font-size:9pt;}
a:active{text-decoration:underline; color:#333333; font-family:돋움; font-size:9pt;}
</style> 
</head>
 
 <body>
<form method=post action=naverlogin_result.php>
<table>
	<tr>
		<td><input type=text placeholder="아이디" name="user_id" maxlength=20 style="width:160px; height:33px;"></td>
		<td rowspan=2><input class=sub type=submit name='login' value="로그인" style="width:66px; height:66px;"></td>
		<td class=fb>IP보안  <input type=button name='ip' style="width:37px; height:13;"></td>
	</tr>
	<tr>
		<td><input type=text placeholder="비밀번호" name="user_pass" maxlength=20  style="width:160px; height:33px;"></td>
		<td class=fb>일회용 로그인</td>
		
	</tr>
</table>
<table>
	<tr class=fb>
		<td><input type=checkbox name='auto'>로그인 상태 유지</td>
		<td><a href="170725_2.html">회원가입</a></td>
		<td><a href="https://goo.gl/fLWZrk">아이디</a>/<a href="https://goo.gl/rFkc3Z">비밀번호 찾기</a></td>
	</tr>
</table>

</div>
</body>
