<?php

$array=[3,2,7,10,30,17];

$score=[
    '姓名'=>'小明',
    '成績'=>'98'
];

// 取鍵值的陣列
$string=array_keys($score);
echo "<pre>";
print_r($string);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";


foreach($array as $key => $val) {
    echo "array[".$key."]=". $val."<br>";
}


if(in_array(3,$array)){
    echo "數字有在陣列中";
} else {
    echo "數字不在陣列中";
}
echo "<hr>";
if(in_array(50,$array)){
    echo "數字有在列中";
}else {
    echo "數字不在陣列中";
}

//將索引另外取陣列列出來
$tmp=array_keys($array);
echo "<pre>";
print_r($tmp);
echo "</pre>";



echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);


$ss="today is a good day";
$tt=explode(" ",$ss);
print_r($tt);


$cc=implode("--",$tt);

echo $cc;

 


