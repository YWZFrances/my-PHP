<?php
	header("Content-type: text/html;charset = utf-8");

$cars = array("Volvo","BMW","Toyota");
echo "I like" . $cars[0] . "," .$cars[1] . " and " . $cars[2] ."22222222";

echo "<br />";
$color = array("red","blue","green");
echo count($cars);
echo "<br />";

$food = array("包子","馒头","花卷");
$foodlength = count($food);
for($x=0;$x<$foodlength;$x++){
	echo $food[$x];
	echo "<br />";
}
echo "<br />";
?>