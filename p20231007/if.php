<?php
$score=55;
if ($score>=90 && $score<=100){
    $level="A";
}elseif($score>=80 && $score<=89){
    $level="B";
}elseif($score>=70 && $score<=79){
    $level="C";
}elseif($score>=60 && $score<=69){
    $level="D";
}elseif($score>=0 && $score<=59){
    $level="E";
}

echo "成績等級為:". $level;
echo "<br>";

switch($level){
    case "A";
      echo "表現優良!";
      break;
    case "B";
      echo "還不錯喔!";
      break;
    case "C";
      echo "加加油!";
      break;
    case "D";
      echo "馬馬虎虎!";
      break;
    case "E";
      echo "是否無心於學業膩?";
      break;
}

?>