<?php
// Constant can't be changed once declared
// Access constant by the class name followed by ::
class HelloWorld {
    const HELLO_WORLD_MESSAGE = "Hello World!";
}

echo HelloWorld::HELLO_WORLD_MESSAGE . "\n";


// We can also access a constant from inside the class by using 'self' keyword
class HelloProgrammer {
    const MESSAGE = "Hello Programmer, how are you?\n";

    public function hello() {
        echo self::MESSAGE;
    }
}

$programmer = new HelloProgrammer();
$programmer->hello();