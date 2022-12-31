<?php
// 算數
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";

// 比較

var_dump($x > $y);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
var_dump($x < $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";


// 指定
echo $x = $y;
echo "<br>";
echo $x += $y;
echo "<br>";
echo $x -= $y;
echo "<br>";
echo $x *= $y;
echo "<br>";
echo $x /= $y;
echo "<br>";
echo $x %= $y;
echo "<br>";


// 邏輯

// and or not\
$a = 100;
$b = 10;
var_dump($a && $b);
var_dump($a || $b);
var_dump(!$a);
?>