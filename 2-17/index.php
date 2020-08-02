<?php
    $num = 1; 
    $sum = 0;
    
do {
    $dice =mt_rand(1 , 6);
    echo $num;
    echo"回目＝";
    echo $dice;
    echo"<br>";
    $sum = $sum + $dice; 
    $num++;
} while($sum < 40);
    echo"合計";
    echo $num-1;
    echo"回でゴールしました！";
    echo"<br>";

echo"<br>";
date_default_timezone_set('Asia/Tokyo');
$date = date("H時", time());
echo"今";
echo $date;
echo"台です";
echo"<br>";

if ($date > 0 && $date < 10 ) {
    echo "おはようございます";
} elseif ($date > 10 && $date < 16 ){
    echo "こんにちは";
}else {
    echo "こんばんは";
}

?>