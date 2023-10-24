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
    // 程式產生西元年
    $thisMonth = date("Y");
    $thisFirstDay = date("Y-m-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    echo $thisFirstDate;
    // 算幾個空白 目前星期和第一天的星期
    // N or w? w比較符合現在,要小心處理
    // strtotime($thisFirstDay) 第一天的秒數
    // w:数字表示星期几	0（星期天）到 6（星期六）
    $thisMonthDays = date("t");
    $thisLastDay = date("Y-m-$thisMonthDays");
    // t:該月份的天數
    echo "<br>";
    $weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
    echo "這個月共有". $weeks. "週";
    
    echo "<br>";
    echo "這個月共有" . $thisMonthDays . "天";
    echo $thisLastDay;


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
            echo "<td>";
            $tmp = 7 * ($i + 1) - (6 - $j) - $thisFirstDate;
            if ($tmp > 0 && $tmp<=$thisMonthDays) {
                echo $tmp;
            }

            // $i=0 要加一，否則乘以會有問題
            // $j是星期, $i是週
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