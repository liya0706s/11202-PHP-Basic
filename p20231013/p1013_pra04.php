<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>

<h2>正直角三角形</h2>
<?php

// echo "*<br>";

// echo "**";
// echo "***";
// echo "****";
// echo "*****";

for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>

<h2>倒直角三角形</h2>
<?php

for ($i=0;$i<5;$i++){
    for($j=5;$j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>正三角形</h2>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>倒正三角形</h2>
<?php

for($i=4;$i>=0;$i--){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>菱形</h2>
<?php
for($i=0;$i<9;$i++){

    if($i<=4){
        $tmp=$i;
    }else{
        $tmp--;
    }

    for($j=0; $j<(4-$tmp); $j++){
        echo "&nbsp";
    }
    for($k=0; $k<($tmp*2+1); $k++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>矩形</h2>
<?php
for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }elseif($j==0 || $j==6){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>

<h2>矩形加對角線</h2>
<?php

for($i=0;$i<7;$i++){

    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }elseif($j==0 ||$j==6||$j==$i||$i+$j==6){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>

<h2>矩形加對角線，中間叉叉部分是紅色</h2>
<?php

for($i=0;$i<7;$i++){

    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }elseif($j==0 ||$j==6){
            echo "*";
        // 以下叉叉部分是紅色
        }elseif($j==$i||$i+$j==6){
            echo "<span style='color:red'>*</span>";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}