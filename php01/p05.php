<?php
header("Content-type: text/html;charset = utf-8");
define("GREETING","这是区分大小写");
echo GREETING;
echo "<br>";
	//这是区分大小写的
	//echo greeting;
	
define("GOOO","这是不区分大小写",true);
//这是不区分大小写的
echo GOOO;
echo "<br>";
echo gooo;
echo "<br>";

define("WOOOO","定义的常量是全局的",true);
function mytest(){
	echo woooo;
}
mytest();
?>