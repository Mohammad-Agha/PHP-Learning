<?php
/*
Namespaces are qualifiers that solve two different problems:
    1. They allow for better organization by grouping classes that work together to perform a task.
    2. They allow the same name to be used for more than one class.

Namespaces MUST declared at the beginning of a file using the 'namespace' keyword
Everything declared in this file will belong to that namespace
It's possible to have nested namespaces
*/

namespace Html;

class Table {
    public $title = "";
    public $numRows = 0;
    public function message() {
        echo "Table '{$this->title}' has {$this->numRows} rows.\n";
    }
}

$table = new Table();
$table->title = "My Table";
$table->numRows = 5;

$table->message();
