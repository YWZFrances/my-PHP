<?php
header("Content-type: text/html; charset=utf-8"); 

echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
EOF;

echo <<<eof
	<h1>123123</h1>
eof;
// 结束需要独立一行且前后不能空格

$name = 'asd111111111';
$a = <<<eof
	abc$name
	"123"
eof;
echo $a;
?>