<?php
	
	header("Content-type: text/html;charset = utf-8");
echo '这是第 " '  . __LINE__ . ' " 行';
echo "<br />";
echo '该文件位于 " '  . __FILE__ . ' " ';
echo "<br />";
echo '该文件位于 " '  . __DIR__ . ' " ';
echo "<br />";
function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();
echo "<br />";

class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
?>