<h2>九九乘法表</h2>
<?php
echo "<table>";
echo "<tr>";
for ($i=1;$i<=9;$i++) {
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo $i. 'x'. $j. '='. ($i*$j) ."&nbsp&nbsp&nbsp";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>尋找字串的位置</h2>
<?php
$source="印出尋找到的單字或字母所在句子中的位置";
$target="句子";

$start=0;
$flag="沒找到";

while($flag=="沒找到"){
    $tmp=mb_substr($source,$start,mb_strlen($target));
    if($tmp==$target){
        $flag="找到了!";
        break;
    }
    $start++;
}

echo "找到了位置在" .$start;
echo "<br>";
echo "原始目標:". $source;
echo "<br>";
echo "尋找字串:". $target;

