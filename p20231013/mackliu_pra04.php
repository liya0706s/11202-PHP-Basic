<h2>直角三角形</h2>
<?php

/* echo "*<br>";
    echo "*";
    echo "<br>";
echo "**<br>";
    echo "*";
    echo "*";
    echo "<br>";
echo "***<br>";
    echo "*";
    echo "*";
    echo "*";
    echo "<br>";
echo "****<br>";
    echo "*";
    echo "*";
    echo "*";
    echo "*";
    echo "<br>";
echo "*****<br>";
    echo "*";
    echo "*";
    echo "*";
    echo "*";
    echo "*";
    echo "<br>";
echo "<hr>";
$i  $j
0 < 1
1   2
2   3
3   4
4   5
 */
$amount=7;

for($i=0;$i<$amount;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}


?>

<h2>倒直角三角形</h2>
<?php
for($i=$amount-1;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
        /* line-height: 10px; */
    }
</style>
<h2>正三角形</h2>
<?php
for($i=0;$i<$amount;$i++){
    for($j=0;$j<($amount-1-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>倒正三角形</h2>
<?php
for($i=$amount-1;$i>=0;$i--){
    for($j=0;$j<($amount-1-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>菱形</h2>
<?php

$mid=floor(($amount*2 -1)/2);
for($i=0;$i<($amount * 2 -1);$i++){

    if($i<=$mid){
        $tmp=$i;
    }else{
        $tmp--;
    }

    for($j=0;$j<($mid-$tmp);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($tmp*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>矩形</h2>
<?php

for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==($amount-1)){
            echo "*";
        }else if($j==0 || $j==($amount-1)){
            echo "*";
        }else{
            echo "&nbsp;";
        }

    }
    echo "<br>";
}



?>
<h2>矩形加對角線</h2>
<?php

for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==($amount-1)){
            echo "*";
        }else if($j==0 || $j==($amount-1) || $j==$i || $i+$j==($amount-1)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<h2>矩形對角線加上css</h2>
<?php

for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==($amount-1)){
            echo "*";
        }else if($j==0 || $j==($amount-1)){
            echo "*";
        }else if($j==$i || $i+$j==($amount-1)){
            echo "<span style='color:red'>*</span>";
        }else{    
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
