<?php

/* PHP supports single inheritance: a child class can inherit only from one single parent.
So what if a class needs to inherit from multiple behaviors? OOP traits solve this problem.
Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, protected, or private)
Traits are declared with the 'trait' keyword.
To use a trait in a class, use the 'use' keyword.
*/

trait TraitName {

}

class MyClass {
    use TraitName;
}

trait message1 {
    public function msg1() {
        echo "Hello World\n";
    }
}

class Welcome {
    use message1;
}

$obj = new Welcome();
$obj->msg1();


trait MessageTrait1 {
    public function msg1() {
        echo "Message 1\n";
    } 
}

trait MessageTrait2 {
    public function msg2() {
        echo "Message 2\n";
    } 
}

class Wlc1 {
    use MessageTrait1;
}

class Wlc2 {
    use MessageTrait1, MessageTrait2;
}


$object1 = new Wlc1();
$object2 = new Wlc2();

$object1->msg1();
$object2->msg1();
$object2->msg2();
