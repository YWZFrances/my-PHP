<?php
	header("Content-type: text/html; charset=utf-8"); 
	
$x=5;
$y=6;
$z=$x+$y;
echo $z;

$x = 5;

function mytest(){
	$y=10;
	echo "<p>测试函数内变量:<p>"; 
    
    echo "<br>"; 
    echo "变量 y 为:<br /> $y"; 
}

mytest();

echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
echo "变量 y 为: $y"; 

$z=5;
$a=10;
 
 echo "<br />";
 
function myTest1()
{
    global $z,$a;
    $a=$z+$a;
}
 
myTest1();
echo $a; // 输出 15

 echo "<br />";

function myTest2()
{
    static $x=0;
    echo $x;
    $x++;
}
 
myTest2();
 echo "<br />";
myTest2();
 echo "<br />";
myTest2();
 echo "<br />";

function myTest3($x)
{
    echo $x;
}
myTest3(5);

?>