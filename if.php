    <?php
    $score = 55;

    echo "我的成績:" . $score;
    echo "<br>";
    echo "判斷為:";

    // . 是連接字串用的
    // 換行br是字串 傳送換行給connect端

    // $score=70 是字串相等 跟==70不一樣
    // $score==70 true false 賦值
    if ($score >= 60) {
        echo "及格";
    } else {
        echo "不及格";
    }
    ?>
