<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
<?php
$year=104;
echo "年份:" .$year;
echo "<hr>";

if (($year%4==0 && $year%100!=0)||($year%100==0 && $year%400==0)) {
    echo $year. "是閏年";
} else {
    echo $year. "是平年";

}


