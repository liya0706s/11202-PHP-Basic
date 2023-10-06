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

$c=[];
$c['姓名']='Angie';
$c['興趣']=['野餐','追劇','看書'];
echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['姓名'];
// 用中括號指定key值;
echo $c['興趣'][0];
echo $c['興趣'][2];

?>
<h3>迴圈陣列</h3>

<?php

$a=['甲','乙','丙'];

for($i=0;$i<count($a);$i++) {
    echo $a[$i];
}

echo "<br>";

// as當作
// a陣列中的每個元素當成變數b
// $b=$a[0];
// $b=$a[1];
// $b=$a[2];
foreach($a as $b) {
    echo $b;
}

?>