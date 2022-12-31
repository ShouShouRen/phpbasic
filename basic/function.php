<?php
function test()
{
    echo "TEST";
}
// test();

function calc($x)
{
    echo $x * 1.5;
}

// calc(100);

function square($x, $y)
{
    echo $x * $y;
}
// square(10,20);

function hello($name)
{
    return "hello" . $name;
}
// echo hello("john");

$a = hello("john");
echo $a;

$b = calc(100);
echo $b;
