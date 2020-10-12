<?php

/* 
An iterable is any value which can be looped through with a foreach() loop.
It can be used as a data type for function arguments and function return values.
The 'iterable' keyword can be used to define a iterable 
*/

function iterableFunction(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo "$item ";
    }
  }
  
  $arr = ["a", "b", "c"];
  iterableFunction($arr);


function returnIterable():iterable {
  return ["a", "b", "c"];
}

echo "\n";
$iter = returnIterable();
foreach($iter as $item) {
  echo "{$item} ";
}
echo "\n";


/* Iterables can be created too
All arrays are iterables, so any array can be used as an argument of a function that requires an iterable.
Any object that implements the 'Iterator' interface can be used as an argument of a function that requires an iterable.
An iterator contains a list of items and provides methods to loop through them. It keeps a pointer to one of the elements in the list. Each item in the list should have a key which can be used to find the item.

An iterator must have these methods:

  current() - Returns the element that the pointer is currently pointing to. It can be any data type
  key() Returns the key associated with the current element in the list. It can only be an integer, float, boolean or string
  next() Moves the pointer to the next element in the list
  rewind() Moves the pointer to the first element in the list
  valid() If the internal pointer is not pointing to any element (for example, if next() was called at the end of the list), this should return false. It returns true in any other case
*/

class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    return $this->pointer < count($this->items);
  }
}

function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo "$item ";
  }
}
$myIterator = new MyIterator(["a", "b", "c", "d", "e"]);
printIterable($myIterator);
echo "\n";