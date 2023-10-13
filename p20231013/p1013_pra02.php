<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border-collapse: collapse;
            border: 1px solid pink;
        }
       
    </style>
</head>
<body>
<h2>九九乘法表</h2>
<?php
echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    $j=1;
    while($j<9){
        echo "<td>";
        $j++;
        echo $i .'x'. $j.'='.($i*$j). "&nbsp&nbsp";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>交叉計算:九九乘法表</h2>
<?php

echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    // 在for裡面放if條件式判斷，讓第一列tr$j灰底色
    if($j==0){
        // 表頭是由0開始
        echo "<tr style='background:#eee'>";
    } else{
        // 這邊是什麼意思?
        echo "<tr>";
    }

    for($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
        } else{
            // 這邊是什麼意思?
            echo "<td>";
        }

        // 當$j等於零時，只印出$i
        // 當$i等於零時，只印出$j
        if($i==0 && $j==0){
            echo "";
        }elseif($j==0){
            echo $i;
        }elseif($i==0){
            echo $j;
        }else{
            echo$j*$i;
        }
    }
    echo "</tr>";
}
echo "</table>";
?>




<table>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

</body>
</html>

