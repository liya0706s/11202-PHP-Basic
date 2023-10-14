<?php

//$a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]="桃園";
$a[]="中壢";

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];
echo "<br>";
$b=[];
$b["name"]="Angie Lee";
$b['tel']='0925123456';
$b['血型']="A型";

echo "<pre>";
print_r($b);
echo "</pre>";
echo $b['name'];
echo $b['血型'];

echo "<hr>";
$c=[];
$c['name']="李亞璇";
$c['興趣']=['野餐','看書','追劇','聽音樂'];
echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['興趣'][2];
echo $c['興趣'][0];
?>

<h3>陣列</h3>
<?php

$a=['甲','乙','丙','丁','戊'];

//第一種列出陣列的方法foreach
foreach($a as $value){
    echo "$value<br>";
}

//第二種列出陣列的方法for加上count($a)
for($i=0;$i<count($a);$i++){
    echo $a[$i];
}

?>