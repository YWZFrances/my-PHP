<?php
header("Content-type: text/html;charset = utf-8");

$x = 10;
$y = 6;
echo ($x + $y);
echo "<br />";

echo ($x - $y); // 输出4
echo '<br>';  // 换行
 
echo ($x * $y); // 输出60
echo '<br>';  // 换行
 
echo ($x / $y); // 输出1.6666666666667
echo '<br>';  // 换行
 
echo ($x % $y); // 输出4
echo '<br>';  // 换行
 
echo -$x;

//php 7.0以上才有这个方法
//var_dump(intdiv(10,3));

$x=10; 
echo $x; // 输出10
 
$y=20; 
$y += 100;
echo $y; // 输出120
 
$z=50;
$z -= 25;
echo $z; // 输出25
 echo '<br>';  // 换行
$i=5;
$i *= 6;
echo $i; // 输出30
 echo '<br>';  // 换行
$j=10;
$j /= 5;
echo $j; // 输出2
 echo '<br>';  // 换行
$k=15;
$k %= 4;
echo $k; // 输出3
echo '<br>';  // 换行
$a = "12312312";
$b = "99999";
$a .= $b;
echo $a;
echo '<br>';  // 换行
$x="Hello";
$y="66666666";
$x .= $y;
echo $x; // 输出Hello world! 
echo '<br>';  // 换行

$x=10; 
echo ++$x; // 输出11
 echo '<br>';  // 换行
$y=10; 
echo $y++; // 输出10
echo '<br>';  // 换行
echo $y; // 输出11
echo '<br>';  // 换行
   
$z=5;
echo --$z; // 输出4
echo '<br>';  // 换行
   
$i=5;
echo $i--; // 输出5
echo '<br>';  // 换行
	
$x = array("name"=>"red","color"=>"green");
$y = array("c"=>"blue","d"=>"yellow");
$z = $x+$y;//数组$x和$y合并
echo '<br>';
var_dump($z);
echo '<br>';
print_r ($z);
echo '<br>';
	
var_dump($x == $y);
echo '<br>';
	var_dump($x === $y);
echo '<br>';
	var_dump($x != $y);
echo '<br>';
	var_dump($x<>$y);
echo '<br>';
	var_dump($x !== $y);	
echo '<br>';
	
//三目运算符
$test = "yuewenzhe";
$a = ($test == "yuewen") ? "123" : 'nobody';
echo $a, PHP_EOL;

echo ("<br />");

//PHP7以后才支持组合比较符
// 整型
//echo 1 <=> 1; // 0
//echo 1 <=> 2; // -1
//echo 2 <=> 1; // 1


$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);// 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;//这里的 $d 就是 boolean 值 true 
var_dump($d);


$a = 1;
$b = 2;
$c = 3;
$d = $a + $b * $c;
echo $d;//7
echo "\n";
$e = ($a + $b) * $c;  // 使用括号
echo $e;//9
echo "\n";





?>