<h2>建立一個學生成績陣列</h2>

<?php

$score=[
    '姓名'=>'judy',
    '國文'=>95,
    '英文'=>64,
    '數學'=>70,
    '地理'=>90,
    '歷史'=>84
];
print_r($score);
echo "<br>";
$score=[
    '姓名'=>'amo',
    '國文'=>88,
    '英文'=>78,
    '數學'=>54,
    '地理'=>81,
    '歷史'=>71
];
print_r($score);
echo "<br>";
$score=[
    '姓名'=>'john',
    '國文'=>45,
    '英文'=>60,
    '數學'=>68,
    '地理'=>70,
    '歷史'=>62
];
print_r($score);
echo "<br>";
$score=[
    '姓名'=>'peter',
    '國文'=>59,
    '英文'=>32,
    '數學'=>77,
    '地理'=>54,
    '歷史'=>42
];
print_r($score);
echo "<br>";
$score=[
    '姓名'=>'hebe',
    '國文'=>71,
    '英文'=>62,
    '數學'=>80,
    '地理'=>62,
    '歷史'=>64
];
print_r($score);
echo $score['姓名'];
?>

<h2>老師的作法</h2>
<?php
$subject=['國文','英文','數學','地理','歷史'];
$judy=[95,64,70,90,84];
$amo=[88,78,54,81,71];
$john=[45,60,68,70,62];
$peter=[59,60,68,70,62];
$hebe=[71,62,80,62,64];

// 計算國文平均成績
$avg=($judy[0]+$amo[0]+$john[0]+$peter[0]+$hebe[0])/ 5;
echo $avg;

?>
<h2>另一個方法:</h2>
<?php
// $students=[
//     '國文'=>[['name'=>'judy',
//             'score'=>95],
//     ['name'=>'amo',
//     'score'=>88],

// ]
?>

<h2>利用程式產生陣列</h2>
<?php

// 宣告一個空的陣列
$nine=[];
echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for ($i=1;$i<=9;$i++){
        $nine[]="$j * $i = " .($j*$i). "<br>";
        
    // 雙引號裡可以直接放變數，單引號放字串
    }

}
?>
// print_r($nine);

// 迴圈內容印出來，每九個換行一次 
// 透過餘數的方式，做斷行的判斷

<style>
    table {
        border-collapse: collapse;
    }
    table, tr, td{
        border: 1px black solid;
        padding: 5px 9px;
    }
</style>

<?php
foreach($nine as $idx => $value) {
    echo $value;
    if ($idx%9==8){
        echo "<br>";
    }
}

echo "<table>";
foreach($nine as $idx => $value) {
    // echo $value;
    if($idx%9==0){
        echo "<tr> 
                <td>$value</td>";
    }else if ($idx%9==8){
        echo "<td>$value</td>
            </tr>";
    }else{
        echo "<td>$value</td>";
    }
    }
echo "</table>";
?>





