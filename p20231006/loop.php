<?php

// for(起始值;條件式;增減值) {
//     要執行的程式碼
// }

// $i=initial 初始值 
// $sum 算總數從零開始

$sum=0;
for($i=0;$i<=10;$i++) {
    echo '當$i=' . "$i" . '時,';
    echo '$sum等於' . $sum=$sum+$i;
    echo '$sum+$i的值是' . "$sum=$sum+$i";
    echo "<br>";
}
echo "1加到10為:" . $sum;

?>

<?php
// 單引號和雙引號怎麼使用? 
$name=John;

echo "Hi, $name!";  //會印出Hi, John!--雙引號放可變變數
echo 'Hi, $name!';  //會印出Hi, $name!--單引號放變數名稱(不變)

?>

<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>

<?php

$n=30;

// 假設n為30, print出1到30, i=i+2的規律
for($i=1;$i<=$n;$i=$i+2) {
    echo $i;
    echo ",";
}

echo "<hr>";

for($i=1;$i<=$n;$i++) {
    echo $i*10;
    echo ",";

// 為什麼最後顯示到300?因為$n=30?

}

echo "<hr>";

// 質數:除了自己和1之外，沒有其他的因數，只能被1和自己整除。
?>

<h3>巢狀迴圈</h3>
<!-- 以下請用巢狀迴圈顯示出 3,5,7,11,13,17……97 -->
<?php
$n=100;
$count=0;
for($j=3;$j<=$n;$j++){
    $flag=true;

    for($i=2;$i<=($j/2);$i++) {
        $count++;
            echo "$j除以$i"
            if(($j % $i)==0){
                $flag=false;
            }
    }
   
}

if($flag==true){
    echo $a . "是質數";
}else{
    echo $a . "不是質數";

}

?>


