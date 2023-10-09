<h2>使用巢狀判斷</h2>
<?php
$score=88;
if($score>=90 && $score<=100){
    $level="A";
}else if($score>=80 && $score<=89){   
    $level="B";
}else if($score>=70 && $score<=79){     
    $level="C";
}else if($score>=60 && $score<=69){       
    $level="D";
}else if($score>=0 && $score<=59){            
    $level="E";
} 


echo "成績等級為:".$level;
echo "<br>";

switch ($level) {
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";
}

?>