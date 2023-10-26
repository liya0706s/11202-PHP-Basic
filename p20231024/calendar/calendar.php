<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table,
        th,
        tr,
        td {
            border-collapse: collapse;
            border: 3px solid #999;
        }

        td {
            border: 1px solid #999;
            border-collapse: collapse;
            padding: 5px 10px;
            /* padding抓 1:2或1:3 */
            text-align: center;
            /* emmet:tac+tab */
        }
    </style>
</head>

<body>

    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";
    // 獲取當前年份
    $thisYear = date("Y");

    // 獲取本月第一天
    $thisFirstDay = date("Y-m-1");

    // 本月第一天的星期w: 0（星期天）到 6（星期六）
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    // strtotime($thisFirstDay) 第一天的時間
    // 算幾個空白 目前星期和第一天的星期

    // 輸出本月第一天的星期
    // echo $thisFirstDate;


    // 獲取本月的總天數t
    $thisMonthDays = date("t");

    // 獲取本月的最後一天日期
    $thisLastDay = date("Y-m-$thisMonthDays");
    echo "<br>";

    // 計算本月的總週數，總天數加上第一天的星期是從哪一天開始算，取整以確保覆蓋整個月
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    echo "這個月共有" . $weeks . "週";

    // 輸出本月的總天數
    // echo "<br>";
    // echo "這個月共有" . $thisMonthDays . "天";
    // echo $thisLastDay;


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

    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            echo "<td>";
            $tmp = 7 * ($i + 1) - (6 - $j) - $thisFirstDate;
            // $i=0 要加一，否則乘以會有問題
            // $j是星期, $i是週

            if ($tmp > 0 && $tmp <= $thisMonthDays) {
                echo $tmp;
                //$tmp>0才輸出，不然會有輸出負數的日期
                // 檢查日期"在本月範圍內"，輸出日期
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";


    ?>

    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";

    $thisMonth = date("Y");
    // 這個月的第一天
    $thisFirstDay = date("Y-m-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    echo $thisFirstDate;
    $thisMonthDays = date("t");
    $thisLastDay = date("Y-m-$thisMonthDays");
    echo "<br>";

    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);

    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    echo $firstCell;



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

    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            $addDays = 7 * $i + $j;
            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                echo "<td style='background:pink'>";
            } else {
                echo "<td>";
            }

            if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                echo date("j", $thisCellDate);
                // 月份中的第几天，没有补零	1 到 31
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    // if($i==0 && $j==$thisFirstDate){
    //     $startDays= 7 * ($i + 1) - (6 - $j) - $thisFirstDate -1;
    //     $date=strtotime("+$startDays days", strtotime($thisFirstDay));
    //     echo date("Y-m-d", $date);
    // }else{
    //     $tmp = 7 * ($i + 1) - (6 - $j) - $thisFirstDate-1;
    //     $date=strtotime("$tmp days", strtotime($thisFirstDay));
    //     echo date("Y-m-d", $date);
    //     echo ",$tmp";
    // }



    // 月曆上第一格的第一天?????
    // 第一格那一天的日期 公式


    // $tmp = 7 * ($i + 1) - (6 - $j) - $thisFirstDate;
    // if ($tmp > 0 && $tmp<=$thisMonthDays) {
    //     echo $tmp;
    // }

    // $i=0 要加一，否則乘以會有問題
    // $j是星期, $i是週

    //     }
    //     echo "</tr>";
    // }

    // echo "</table>";

    // 
    ?>

    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";

    $thisMonth = date("Y");
    // 這個月的第一天
    $thisFirstDay = date("Y-m-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    // echo $thisFirstDate;
    $thisMonthDays = date("t");
    $thisLastDay = date("Y-m-$thisMonthDays");
    // echo "<br>";

    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    // 計算这個月有多少週

    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    // echo $firstCell;
    // 計算該日曆第一個單元格的日期



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

    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            $addDays = 7 * $i + $j;
            $thisCellDate = date("Y-m-d", strtotime("+$addDays days", strtotime($firstCell)));
            $thisCell=strtotime($thisCellDate);
            if (date('w',$thisCell)==0 || date('w',$thisCell)==6 ){
                echo "<td style='background:pink'>";
            } else {
                echo "<td>";
            }
            if (date("m") == date("m", strtotime($thisCellDate))) {
                echo $thisCellDate;
            } 
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    ?>



    <h3>西元2023年10月</h3>
    <table>
        <tr>
            <th>日</th>
            <th>一</th>
            <th>二</th>
            <th>三</th>
            <th>四</th>
            <th>五</th>
            <th>六</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
        </tr>
        <tr>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
        </tr>
        <tr>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
        </tr>
        <tr>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
        </tr>
        <tr>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>

</html>