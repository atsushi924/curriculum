<?php

$x = 7.3;
echo ceil($x);
echo "<br>";

echo floor($x);
echo "<br>";

echo round($x);
echo "<br>";

echo pi();
echo "<br>";

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
circleArea(3);
echo "<br>";

echo mt_rand(1, 20);
echo "<br>";

$str = "hogehogehoge";
echo strlen($str);
echo "<br>";

$str = "atsushi";
echo strpos($str, "a");
echo "<br>";

$str = "atsushi";
echo substr($str, -3, 2);
echo "<br>";

$str = "atsushi";
echo str_replace("tsu", "TSU", $str);
echo "<br>";

$str = "I am Atsushi";
echo str_replace(" ", "", $str);
echo "<br>";

$name = "内田"; $limit_time = 30; $price = 3000; printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
echo "<br>";

$limit_hour = 2;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";

$limit_hour = 3;
$limit_minute = 3;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";

$limit_hour = 3;
$limit_minute = 3;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";

$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
echo "<br>";

?>