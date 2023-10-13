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