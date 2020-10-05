<?php

function  greetings() {
    echo "Hello user<br>";
}
greetings();

function greetings2($name) {
    echo "Hello $name<br>";
}
greetings2("Mohammad");

function greetings3($name, $age) {
    echo "Hello $name, you are $age years old<br>";
}
greetings3("Mohammad", 21);

function add($a, $b) {
    return $a + $b;
}
echo add(10, 20)."<br>";

function multipleByTen(&$num) { // passing the reference of the variable
    $num *= 10;
}
$value = 9;
echo "Before: $value<br>";
multipleByTen($value);
echo "After: $value<br>";
