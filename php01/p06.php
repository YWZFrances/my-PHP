<?php
header("content-type:text/html;charset=utf-8"); 
$txt="Hello world!"; 
echo $txt; 

echo "<br />";

$txt1 = "hello wordl222";
$txt2 = "what the fuck life!!!";
echo $txt1 . "" . $txt2;
echo "<br />";

//PHP strlen()函数可以返回字符串的长度
echo "hello world 长度为：";
echo strlen("hello world");
echo "<br />";

//PHP strpos()函数用于在字符串内查找一个字符或者一段指定的文本
//但是常用于判断字符串中是否存在某个字符串
echo strpos("hello hello what the fuck world","123")
?>