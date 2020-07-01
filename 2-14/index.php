<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida", "yamada" ];
echo count($members);
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida", "yamada" ];
sort($members);
var_dump($members);
echo "<br>";

$numbers = [2, 39, 47, 77, 65];
sort($numbers);
var_dump($numbers);
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$atstr = implode($members);
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members);
echo "<br>";

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
echo "<br>";

?>