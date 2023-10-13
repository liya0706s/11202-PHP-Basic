<h2>九九乘法表</h2>
<?php
for($i=1;$i<=9;$i++){
    
    $j=1;
    while($j<9){
        $j++;
        echo $i .'x'. $j.'='.($i*$j). "&nbsp&nbsp&nbsp&nbsp";
    }
    echo "<br>";
}