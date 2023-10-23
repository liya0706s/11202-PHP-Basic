<h2>字串取代</h2>
將”aaddw1123”改成”*********”

<?php

$s="aaddw1123";
echo "<br>";
$t=str_replace(['a','d'],'*',$s);

// 將要取代的字放到陣列中，放不完的字
echo $t;
echo "<br>";
echo str_repeat("*", strlen($s));
// repeat長度

?>


<h2>字串分割</h2>

將”this,is,a,book”依”,”切割後成為陣列
<!-- explode將字炸開 -->
<?php
$s="this,is,a,book";

$a=explode(',', $s);
echo "<pre>";
print_r($a);
echo "</pre>";


?>

<h2>字串組合</h2>
將上例陣列重新組合成“this is a book”
<?php
echo "<br>";
echo join(' ', $a);
echo "<br>";
echo implode(' ', $a);

?>

<h2>子字串取用</h2>

將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
<br>
<?php
$source="The reason why a great man is great is that he resolves to be a great man";
echo substr($source, 0, 10)."...";
// 參數 從0開始取，取10個字

echo "<br>";
$cs="今天天氣真的是不太好的樣子";
echo mb_substr($cs, 0, 3)."...";
// echo substr($cs, 0, 3)."...";
// substr 三個英文字等於一個中文字(3 bytes=1個中文字)

?>



<h2>尋找字串與HTML、css整合應用</h2>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>

<?php

$source="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$a="程式設計";
$b=mb_substr($source, 7, 4);
// strpos=7, strlen=4

echo "學會PHP網頁 <span style='color:red; font-size:20px'>$b</span> ，薪水會加倍，工作會好找";

?>
<br>

<?php
$key="工作";
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
echo str_replace($key,
"<span style='font-size:30px;color:purple'>$key</span>",
$str);
// 用變數替代比較安全，維護擴充比較方便。
?>


<!-- $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
for($i=0;$i<mb_strlen($str);$i=$i+3){
    echo $str[$i];
} -->


