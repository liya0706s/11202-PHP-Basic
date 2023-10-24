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

echo $date1.'到'.$date2.'有'. $days.'天';
// echo+字串

?>

<h2>計算下次生日還有幾天</h2>
<?php

$date="1974-10-07";
$br=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$br));
// date("Y")--今年的年份 和生日的月日
echo date("Y-m-d", $diff);
$today=strtotime('now');
if($diff>$today){
    // 代表生日還沒到
    $days=($diff-$today)/(60*60*24);
} else {
    // 代表生日過了，年份+1
    // $nextbr=strtotime((date("Y")+1)."-".date("m-d",$br));
    $diff=strtotime("+1 year",$diff);
    $days=($diff-$today)/(60*60*24);
}

echo "距離下一次生日:".date("Y-m-d",$diff). "還有". floor($days)."天";
// floor()意思是取整數