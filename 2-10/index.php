<?php

function getCuboidCube($vertical, $horizontal, $height ) {
    $cube = $vertical * $horizontal * $height ;
    print "直方体の面積は".$cube."だよ。"; 
}
getCuboidCube(5,10,8);

?>

