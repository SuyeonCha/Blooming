<meta charset="UTF-8">
<?php

$money=3000; //지불한돈
$price=800; //개당 물건 가격
$num=3; //갯수

echo "물건값:<font color=yellow> ".$price*$num."</font><br/>";
echo "구매갯수: ".$num."<br/>";
echo "지불액: ".$money."<br/>";
echo "거스름돈은 ".($money-($price*$num))." 입니다.<br/>";
?>
<br/>
<?php
$age=5;
$fee=10000;
if($age<7){
	echo "무료입니다.<br/>";
}
else{
	echo fee."원 입니다.<br/>";
}
?>
<br/>
<?php
$number=7;
if($number%2==0){
	echo "짝수입니다.<br/>";
}
else{
	echo "홀수입니다.<br/>";
}
?>
<br/>
<?php
$k=170;
$m=40;
if($m>($k-100)*0.9){
	echo "다이어트가 필요합니다.<br/>";
}
else{
	echo "다이어트가 필요하지않습니다<br/>";
}
?>
<br/>
<?php
$p=75;
$s=86;
if($p>=70 && $s>=80){
	echo "축하드립니다. 합격입니다.<br/>";
}
else{
	echo "불합격입니다.<br/>";
}
?>
<br/>
<?php
$jumsu=80;
switch($jumsu/10){
	case 10: echo "A입니다.<br/>"; break;
	case 9: echo "B입니다.<br/>"; break;
	case 8: echo "C입니다.<br/>"; break;
	case 7: echo "D입니다.<br/>"; break;
	case 6: echo "E입니다.<br/>"; break;
}
?>
<br/>
<?php
$jua=20000;//대인18~
$jub=15000;//소인7~17
$yaa=15000;//야간대인
$yab=10000;//야간소인

$agee=30;
$ageju=1;

if($agee>=18){
	if($ageju=1){
		echo $jua."원 입니다.<br/>";
	}
	else{
		echo $yaa."원 입니다.<br/>";
	}
}
else if($agee>=7 && $agee<=17){
	if($ageju=1){
		echo $jub."원 입니다.<br/>";
	}
	else{
		echo $yab."원 입니다.<br/>";
	}
}
else{
	echo "무료입니다.<br/>";
}
?>
<br/>
<?php

for($i=0;$i<5;$i++){
	for($j=0;$j<=$i;$j++){
		echo "<font color=red>*</font>";
		
	}
	echo "<br/>";
}
?>
