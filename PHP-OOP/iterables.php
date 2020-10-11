<?php

/* 
An iterable is any value which can be looped through with a foreach() loop.
It can be used as a data type for function arguments and function return values.
The 'iterable' keyword can be used to define a iterable 
*/

function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item . PHP_EOL;
    }
  }
  
  $arr = ["a", "b", "c"];
  printIterable($arr);