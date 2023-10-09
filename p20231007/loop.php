<?php
$sum=0;

for($i=1;$i<=10;$i++){
  echo '當$i='.$i. ',$sum='. $sum."時";
  echo '$sum+$i的結果是:';
  echo $sum. "+" .$i. "=";
  echo $sum+$i;
  echo "<br>";
  $sum +=$i;  //要重覆執行的程式碼,$sum=$sum+$i
}

echo "1加到10的總和是".$sum;

?>

<?php
// 單引號和雙引號怎麼使用? 
$name="John";

echo "<hr>";
echo "Hi, $name!";  //會印出Hi, John!--雙引號放可變變數
echo "<br>";
echo 'Hi, $name!';  //會印出Hi, $name!--單引號放變數名稱(不變)

?>

<h3>while迴圈完成1加到100</h3>

<?php
$sum=0;  //總數初設為0
$i=1;    //變數$i從1開始
while($i<=100) {   
  $sum+=$i;  //總和是$sum=$sum+$i, 一開始是1+0
  $i++;  //$i要加一的遞增
  //持續1+0=1, 1+2=3, 3+3=6, 6+4=10.....

}

echo "1加到100的總和是:". $sum;
  //當$i>100時,會跳出執行的程式碼
  //執行大括號以下的程式,輸出....

?>

<?php
echo "<hr>";
$sum=0;
$i=1;

while($i<=20){
  echo '當$i='. $i."時";
  echo '$sum+$i的結果會是:';
  echo $sum . "+". $i. "=";
  echo $sum=$sum+$i;
  $i++;  //要設定$i的條件,否則會變成無限迴圈
  echo "<br>";
}
echo "<br>";
echo '1加到20的總和是'. $sum;
echo "<hr>";
?>

<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>

<h3><li>1,3,5,7,9……n練習,假設n為30</li></h3>
<h4>用for迴圈</h4>
<?php
for ($i=1;$i<=30;$i=$i+2) {
  echo $i;
    if ($i<30){
      echo ",";
    }
}
?>

<h4>用while迴圈</h4>
<?php

$i=1;
while($i<=30){
  echo $i.",";
  $i=$i+2;
}
echo "<hr>";
?>

<h3><li>10,20,30,40,50,60……n</li></h3>
<h4>用for迴圈</h4>
<?php

for($i=10;$i<=300;$i=$i+10){
  echo $i;
  echo ",";
}
?>
<h4>用while迴圈</h4>
<?php
$i=10;
while($i<=300){
  echo $i;
  $i=$i+10;
  echo ",";
}

echo "<hr>";
?>

<h3>判斷是否為質數</h3>
<?php
$a=98;

$flag=true;
for($i=2;$i<($a/2);$i++) {
  echo "$a 除以$i 的餘數為:". ($a%$i);
  echo "<br>";
    if($a%$i==0){
      $flag=false; //不是質數
      break;
    }
}
if ($flag==true) {
  echo $a. "是質數";
} else {
  echo $a. "不是質數";
}
?>

<?php
echo "<br>";
$a=4;
$flag=true;
for($i=2;$i<=($a/2);$i++){
  $a%$i;
  if($a%$i==0){
    $flag==false;
    break;
  }
}
if($flag==true){
  echo $a."是質數";
} else {
  echo $a. "不是質數";
}
?>

