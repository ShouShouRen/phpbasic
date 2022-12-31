<?php
$x = 0;
if ($x > 0) {
    echo "success";
}

if ($x > 0) {
    echo "success 2";
} else {
    echo "error";
}

if ($x > 0) {
    echo "正整數";
} else if ($x < 0) {
    echo "負整數";
} else {
    echo "error";
}

switch ($x) {
    case 0:
        echo 0;
        break;

    case 1:
        echo 1;
        break;

    case 2:
        echo 2;
        break;

    default:
        echo "error";
}

switch (true) {
    case $x > 0:
        echo "正";
        break;
    case $x < 0;
        echo "負";
        break;
}
// 三元運算子
echo $x > 0 ? "success" : "error";
