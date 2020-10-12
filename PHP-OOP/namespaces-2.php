<?php

require 'namespaces.php';

use Html as code; // alias 

$table = new Html\Table();
$table->title = "My Table";
$table->numRows = 10;
$table->message();

$table = new code\Table();
$table->title = "My Table 2";
$table->numRows = 15;
$table->message();
