<?php

// public: the property or method can be accessed from everywhere (default)

// protected: the property or method can be accessed within the class and by class derived from the class

// private: the property or method can ONLY be accessed within the class

class Fruit {
    public $name = "Mango";
    protected $color = "Yellow";
    private $weight = "300";

    public function print() {
        echo "$this->name\n";
        echo "$this->color\n";
        echo "$this->weight\n";
    }
}

$fruit = new Fruit();
$fruit->print(); // No error since color, and weight were accessed from the class

$fruit2 = new Fruit();
$fruit2->name = "Not Mango"; // No error since we can access name from outside class because it's public

$fruit2->color = "Not Yellow"; // Error cannot access protected property from outside class

$fruit2->weight = "Not 300"; // Error cannot access private property from outside class
