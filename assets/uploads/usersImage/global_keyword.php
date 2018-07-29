<?php
$x = 12;
function myTest($value,$v) {
    echo "inside myTest()<br>";
	echo $value;
	$x=90;
	echo $x;
	//global $x;
	
	$GLOBALS["x"]=15;
	echo $GLOBALS["x"];
	echo $x;
	//return $v*2;
}
$str= myTest("HELLO<br>",5);
//echo $str;
echo $x;
//print_r($GLOBALS);
?>