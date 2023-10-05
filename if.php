    <?php
    $score = 85;

    echo "我的成績:" . $score;
    echo "<br>";
    echo "判斷為:";


    // . 是連接字串用的
    // 換行br是字串 傳送換行給connect端

    // $score=70 是字串相等 跟==70不一樣
    // $score==70 true false 賦值
    if ($score >= 60){
        echo "及格!";
    } else {
        echo "不及格唷!";
    }

    if ($score >= 90 && $score <= 100) {
        $level = "A";
    } 
    if ($score >=80 && $score <= 89 ) {
        $level = "B";
    }
    if ($score >=70 && $score <= 79 ) {
        $level = "C";
    }
    if ($score >=60 && $score <= 69 ) {
        $level = "D";
    }
    if ($score >=0 && $score <= 59 ) {
        $level = "E";
    }

    echo "<br>";


    // $level = "B";
    echo "成績等級為:" . $level;
    echo "<br>";

    switch ($level) {
        case "A";
            echo "表現優良!";
            break;
        case "B";
            echo "值得肯定, 還有進步空間!";
            break;
        case "C";
            echo "需要更多練習~!";
            break;
        default:
            echo "是否無心學業?";
    }

    echo "<hr>";

    $num=33;

    echo "號碼:" . $num;
    echo "<br>";
    echo "號碼為:";

    if ($num%2==0) {
        echo "偶數";
    } else {
        echo "奇數";
    }

    
    ?>
