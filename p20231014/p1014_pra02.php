<h1>九九乘法表</h1>
<?php
// 步驟一:先列出九九乘法表的樣子
// echo "1x1=1";
// echo "1x2=2";
// echo "1x3=3";
// echo "<br>";
// echo "2x1=2";
// echo "2x2=4";
// echo "2x3=6";
// echo "<br>";

// 步驟二:找出規律，放迴圈
for($i=1;$i<=9;$i++){
    // $i會有1-9的規律
    for ($j=1;$j<=9;$j++){
        echo $i.'x'.$j.'='.($i*$j);
        echo "<br>";
    }
    echo "<br>";
}