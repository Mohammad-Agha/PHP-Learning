<?php

// Child classes will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

class FruitPublic {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "The fruit is $this->name and the color is $this->color\n";
    }
}
// strawberry class can use the public $name and $color and __constructor() and intro()
class Strawberry extends FruitPublic {
    public function message() {
        echo "Strawberry class inherits from Fruit class\n";
    }
}

$strawberry = new Strawberry("strawberry", "red"); // inherited the constructor
$strawberry->message();
$strawberry->intro(); // inherited the intro function


class FruitProtected {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        echo "The fruit is $this->name and the color is $this->color\n";
    }
}

class Mango extends FruitProtected {
    public function message() {
        echo "Mango class inherits from Fruit class\n";
    }
}

$mango = new Mango("Mango", "Yellow"); // No error, __construct() is public
$mango->message(); // No error, message() is public
$mango->intro(); // Error intro() is protected


// Overriding inherited methods

class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is $this->name and the color is $this->color\n";
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is $this->color, and the weight is $this->weight gram\n";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();


// final keyword can be used to prevent class inheritance

final class FruitFinal {

}

class WhateverFruit extends Fruit { // Error

}

// preventing methods overriding

class Vegetable {
    final public function intro() {

    }
}

class Tomato extends Vegetable {
    // public function intro() { // Error

    // }
}

