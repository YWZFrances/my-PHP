<?php
header("Content-type: text/html;charset = utf-8");

$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;
echo "<br>"; 
//var_dump返回的是变量的数据类型和值
//php不管是什么进制总是以十进制表示
$x = 598511111111;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
echo $x; 
echo "<br>";
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);

echo "<br>"; 
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>"; 
print_r ($cars);
echo "<br>"; 
	
	class Car
	{
		var $color;
		function __construct($color="blue"){
			$this->color = $color;
		}
		function what_color(){
			return $this->color;
		}
	}
	
	echo "<br>";
		
	$x = "hello world!!!";
	$x = null;
	var_dump($x);
	
?>