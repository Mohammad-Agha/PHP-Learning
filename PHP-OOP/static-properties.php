<?php

/*
Static properties can be called directly without creating an instance of a class
Static properties are declared with the 'static' keyword.
To access a static property use the class name, double colon, and the property name
*/

class Pi {
    public static $value = 3.142;
}

echo Pi::$value . PHP_EOL;

class ClassName {
    public static $value = 123;
    public function staticValue() {
        return self::$value;
    }
}

$val = new ClassName();
echo $val->staticValue() . PHP_EOL;

// To call a static property from a child class, we use the 'parent' keyword inside the child class.

class Whatever {
    public static $value = 999;
}

class Child extends Whatever {
    public function someFunc() {
        return parent::$value;
    }
}

echo Child::$value . PHP_EOL;

$child = new Child();
echo $child->someFunc() . PHP_EOL;

