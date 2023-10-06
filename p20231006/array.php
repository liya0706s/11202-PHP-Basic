<?php

// $a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo "<br>";
echo $a[3];

$b=[];
$b['姓名']='Angie';
$b['最高學歷']='北商';
$b['tel']='0925123456';
$b['血型']='A';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['血型'];