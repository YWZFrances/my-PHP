<?php
header("Content-type: text/html;charset = utf-8");

function writeName()
{
    echo "Kai Jim Refsnes";
}
 writeName();
echo "My name is ";
writeName();
echo "<br />";

function writeName1($fname)
{
    echo $fname . " Refsnes.<br>";
}
 
echo "My name is ";
writeName1("Kai Jim");
echo "My sister's name is ";
writeName1("Hege");
echo "My brother's name is ";
writeName1("Stale");

function writeName2($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}
 
echo "My name is ";
writeName2("Kai Jim",".");
echo "My sister's name is ";
writeName2("Hege","!");
echo "My brother's name is ";
writeName2("Stale","?");

echo "<br />";
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}
 
echo "1 + 16 = " . add(1,16);
?>