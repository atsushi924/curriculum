<?php
$num = 1;
while($num < 101 ) {
    
    if ($num % 3 == 0 && $num % 5 == 0) {
    echo "Fizz!Buzz!";
    }elseif ($num % 3 == 0) {
    echo "Fizz!";
    }elseif($num % 5 == 0) {
    echo "Buzz!";
    }else echo $num ;
echo "<br>";
$num++;
}

?>