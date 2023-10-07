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
$sum=0;
$i=1;
while($i<=100) {
  $sum+=$i;
  $i++;
}
echo "1加到100的總和是:". $sum;

?>