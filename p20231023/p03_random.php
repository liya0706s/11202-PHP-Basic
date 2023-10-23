<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>
<?php
// // 3.產生一個陣列
// $num=[];
// // 1. 亂數最小和最大值
// // 2. 跑六次但是有重覆
// for ($i=0;$i<6;$i++){

//     $tmp=rand(1,38);
//     // 先暫時存起來

//     // 會因為有重覆時，沒有執行然後少數字
//     if(!in_array($tmp,$num)){
//         $num[]=$tmp;
//     }
// }

// foreach($num as $n){
//     echo $n.",";
// }


$num=[];

while(count($num)<6){
    // 小於六的狀況
    // 亂數是否在這陣列裡面

    $tmp=rand(1,38);
    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n.",";
}
