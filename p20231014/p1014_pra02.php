<style>
    table, td {
        border-collapse: collapse;
        border: 2px solid pink;
    }

    td {
        padding: 3px 5px;
    }
</style>


<h2>九九乘法表</h2>
<?php
// 步驟一:先列出九九乘法表的樣子
// echo "1x1=1";
// echo "1x2=2";
// echo "1x3=3";
// echo "<br>";
// echo "2x1=2";
// echo "2x2=4";
// echo "2x3=6";
// echo "<br>";

// 步驟二:找出規律，放迴圈
echo "<table>";
for($i=1;$i<=9;$i++){
    // $i會有1-9的規律
    echo "<tr>";
    for ($j=1;$j<=9;$j++){
        echo "<td>";
        echo $i.'x'.$j.'='.($i*$j) ."&nbsp&nbsp&nbsp&nbsp";
        // echo "<br>"; 不用換行，改用四個空白
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>九九乘法表-有標頭</h2>
<!-- <table>
    <tr>
        <td>1x1=</td>
        <td>1x2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2x1</td>
        <td>2x2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3x1</td>
        <td>3x2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4x1</td>
        <td>4x2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table> -->
    <!-- 想想看以上的迴圈 -->

<?php
echo "<table>";
echo "<tr>";
for($j=1;$j<=9;$j++){
    echo "</tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo $j*$i;
        echo "</td>";
    }
}
?>