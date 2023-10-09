<?php

//$a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];
echo "<br>";
$b=[];
$b['姓名']='劉勤永';
$b['最高學歷']='銘傳大學';
$b['tel']='0910123456';
$b['血型']='b';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['tel'];
echo "<hr>";
$c=[];
$c['name']='劉勤永';
$c['興趣']=['看書','打電動','追劇'];
echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['興趣'][0];
echo $c['興趣'][2];