<?php

/*
Interfaces allow you to specify what methods a class SHOULD implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as 'Polymorphism'.
Interfaces are declared with the 'interface' keyword.
*/

interface InterfaceName {
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3(): string;
}

/* 
Interfaces vs. Abstract Classes
- Interfaces cannot have properties, while abstract classes can.
- All interface methods must be public while abstract class methods may also be private or protected
- All methods in an interface are abstract, so they can't be implemented in code and the abstract keyword isn't necessary
*/

// To implement an interface, a class must use the 'implements' keyword
// A class that implements an interface must implement all of the interface's methods

interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "Meow\n";
    }
  }

  class Dog implements Animal {
    public function makeSound() {
      echo "Bark\n";
    }
  }
  
  $animal1 = new Cat();
  $animal2 = new Dog();
  
  $animal1->makeSound();
  $animal2->makeSound();

// Using interfaces, we can write some code which can work for all of the animals even if each animal behaves differently:

interface GeometricShapes {
    public function calculateArea();
  }
  
  // Class definitions
  class Rectangle implements GeometricShapes {
    public $length;
    public $width;
    public function __construct($l, $w) {
        $this->length = $l;
        $this->width = $w;
    }
    public function calculateArea() {
      return $this->length * $this->width;
    }
  }
  
  class Square implements GeometricShapes {
    public $length;
    public function __construct($l) {
        $this->length = $l;
    }
    public function calculateArea() {
      return $this->length * $this->length;
    }
    
  }
  
  class Circle implements GeometricShapes {
    public $radius;
    public function __construct($r) {
        $this->radius = $r;
    }
    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
  }
  
  $rectangle = new Rectangle(3, 4);
  $square = new Square(5);
  $circle = new Circle(3);

  $shapes = array($rectangle, $square, $circle);
  
  foreach($shapes as $shape) {
    echo "{$shape->calculateArea()}\n";
  }