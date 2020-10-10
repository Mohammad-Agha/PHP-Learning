<?php

class Fruit {
    private $name;
    private $color;

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

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name("Apple");
$apple->set_color("Red");

$banana->set_name("Banana");
$banana->set_color("Yellow");

$apple->print_info();
$banana->print_info();