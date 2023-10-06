<?php

// for(起始值;條件式;增減值) {
//     程式碼
// }

// $i=initial 初始值 
// $sum 算總數從零開始

$sum=0;
for($i=0;$i<=100;$i++) {
    echo '當$i=' . "$i" . '時,';
    echo '$sum等於' . $sum=$sum+$i;
    echo '$sum+$i的值是' . "$sum=$sum+$i";
    echo "<br>";
}

// "值", '文字'

echo "1加到100為:" . $sum;


?>