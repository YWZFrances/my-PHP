<?php
header("Content-type: text/html;charset = utf-8");

$t=33;
echo $t;
echo "<br />";
if ($t<20){
    echo "Have a good day!";
}else if($t >= 20 and $t <= 40){
	echo "no no no no <br />";
}else{
	echo " wow wow wow <br />";
}

echo $t;

echo "<br />";

$color = "red";
switch($color){
	case "red":
		echo "红色";
		break;
	case "blue":
		echo "蓝色";
		break;
	default:
		echo "你啥都不喜欢";
}

?>