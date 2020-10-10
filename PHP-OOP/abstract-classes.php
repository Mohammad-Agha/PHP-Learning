<?php

// Abstract classes and methods are used when the parent class has a named method, but needs its child class(es) to fill out the task.

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the parent's code.

// An abstract class or method is defined with the 'abstract' keyword

abstract class parentClass {
    // takes no arguments and return nothing
    abstract public function someMethod1(); 
    // takes two arguments and return nothing
    abstract public function someMethod2($name, $color); 
    // takes no arguments and return a string
    abstract public function someMethod3(): string;
}

// When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also the type and number of required arguments must be the same. However the child classes may have optional arguments in addition

/* We have the following rules when a child class is inherited from an abstract class:
1. The child class method must be defined with the same name it redeclares the parent abstract method
2. The child class method must be defined with the same or a less restricted access modifier
3. The number of required arguments must be the same. However the child class may have optional arguments in addition
*/

abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract function intro(): string;
}

class Mercedes extends Car {
    public function intro(): string {
        return "Choose German quality! I'm $this->name\n";
    }
}

class Jaguar extends Car {
    public function intro(): string {
        return "Choose American quality! I'm $this->name\n";
    }
}

$mercedes = new Mercedes("Mercedes");
echo $mercedes->intro();

$jaguar = new Jaguar("Jaguar");
echo $jaguar->intro();