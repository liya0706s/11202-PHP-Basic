<style>
    table,
    td {
        border-collapse: collapse;
        border: 2px solid pink;
    }

    td {
        padding: 3px 10px;
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
for ($i = 1; $i <= 9; $i++) {
    // $i會有1-9的規律
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>";
        echo $i . 'x' . $j . '=' . ($i * $j) . "&nbsp&nbsp&nbsp&nbsp";
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
for ($j = 0; $j < 10; $j++) {
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    
    for ($i = 0; $i < 10; $i++) {
        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if ($j == 0 && $i == 0) {
            echo "";
        } elseif ($j == 0) {
            echo $i;
        } elseif ($i == 0) {
            echo $j;
        } else {
            echo $j * $i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>九九乘法表留左下</h2>
<?php
echo "<table>";
echo "<tr>";
for ($j = 0; $j < 10; $j++) {
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    
    for ($i = 0; $i < 10; $i++) {
        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if ($j == 0 && $i == 0) {
            echo "";
        } elseif ($j == 0) {
            echo $i;
        } elseif ($i == 0) {
            echo $j;
        } elseif ($j<$i) { 
            echo "";
        } else {
            echo $j * $i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";