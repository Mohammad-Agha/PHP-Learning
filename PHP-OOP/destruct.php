<?php

class Fruit {
    private $name;
    private $color;

    function __construct($nameConstructor, $colorConstructor) {
        $this->name = $nameConstructor;
        $this->color = $colorConstructor;
    }

    function __destruct() { // It's called automatically at the end of the script
        $this->name .= " Fruit";
        echo "$this->name, $this->color\n";
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }

    function print_info() {
        echo "Name: $this->name, Color: $this->color \n";
    }
}

$apple = new Fruit("Apple", "Red");
$banana = new Fruit("Banana", "Yellow");
$banana->print_info();
$apple->print_info();