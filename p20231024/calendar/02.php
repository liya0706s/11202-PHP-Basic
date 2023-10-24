<?php
    echo "<h3>";
    echo date("西元Y年2月");
    echo "</h3>";
   
    $thisMonth = date("Y");
    // 這個月的第一天
    $thisFirstDay = date("Y-2-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("Y-2-$thisMonthDays");

    $weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
    
    $firstCell=date("Y-2-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));


    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";

    for ($i = 0; $i < $weeks ; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            $addDays=7*$i+$j;
            $thisCellDate=strtotime("+$addDays days", strtotime($firstCell));
            if(date('w', $thisCellDate)==0 || date('w',$thisCellDate)==6){
                echo "<td style='background:pink'>";
            } else {
                echo "<td>";
            }

            if(date("m", $thisCellDate)==date("m", strtotime($thisFirstDay))) {
                echo date("j", $thisCellDate);
                // 月份中的第几天，没有补零	1 到 31
            }
            echo "</td>";
        }
    echo "</tr>";
}

echo "</table>";
?>