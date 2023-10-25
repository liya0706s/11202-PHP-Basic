<h1>日期與時間</h1>
<?php

date_default_timezone_set('Asia/Taipei');

echo date("Y-m-d H:i:s");

?>

<h2>strtotime</h2>
<?php

echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s", $time);
?>
<h3>算天數差</h3>
<?php
$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);
// strtotime是秒數除以60是分除以60是小時除以24是天數

echo $date1.'到'.$date2.'有'. $days.'天';
// echo+字串

?>

<h2>計算下次生日還有幾天</h2>
<?php

$date="1974-10-07";
$br=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$br));
// 計算生日當年的日期，保留今年的年份
echo date("Y-m-d", $diff);
// 輸出今年生日的年月日
$today=strtotime('now');
if($diff>$today){
    // 代表生日還沒到
    $days=($diff-$today)/(60*60*24);
} else {
    // 代表生日過了，年份+1
    // $nextbr=strtotime((date("Y")+1)."-".date("m-d",$br));
    $diff=strtotime("+1 year", $diff);
    $days=($diff-$today)/(60*60*24);
}

echo "距離下一次生日:".date("Y-m-d",$diff). "還有". floor($days)."天";
// floor()意思是取整數

?>
<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
<li>2021/10/05</li>
<li>10月5日 Tuesday</li>
<li>2021-10-5 12:9:5</li>
<li>2021-10-5 12:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php
echo date("Y/m/d");
// 今天日期
echo  "<br>";
echo date("m月d日 l");
// 小寫L代表星期
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y-n-j G:i:s");
echo "<br>";

echo date("今天是西元Y年m月d日");
// 上班日與否用平日和周末來判斷
// date("N") 1(星期一)到7(星期天)
if(date("N")<=5){
    echo "上班日";
}else{
    echo "假日";
}
?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
<ul>
<li>2021-10-04 星期一</li>
<li>2021-10-11 星期一</li>
<li>2021-10-18 星期一</li>
<li>2021-10-25 星期一</li>
<li>2021-11-01 星期一</li>
</ul>

<?php
$todayWeek=date("N");
// N代表星期 1 (for Monday) through 7 (for Sunday)
// echo $todayWeek;
// 今天是2 週二，與下週一的距離是6 (7-2+1)
// 這週一差一天，再算下週一(-1+7)
// echo "<br>";
// echo $todayWeek-1;
// 距離週一差一天
// $lastMon=strtotime("-1 days");
// -1 = $diff 
echo "<br>";
$diff=1-$todayWeek;
// 與週一的距離是:減1天
$lastMonday=strtotime("$diff days");
echo date("Y-m-d", $lastMonday); //上周一的日期
echo "<br>";
// echo date("Y-m-d", strtotime("+1 week", $lastMonday)); 
// strtotime("+1 week", $lastMonday) 從上周一加一週的秒數
// 把以上是代表下一個週一，設為$nextMonday
$nextMonday=date("Y-m-d", strtotime("+1 week", $lastMonday));

for($i=0;$i<5;$i++){
    $nextMonday=date("Y-m-d l", strtotime("+1 week", strtotime($nextMonday)));
    // 每加一個week
    echo $nextMonday;
    echo "<br>";
}




