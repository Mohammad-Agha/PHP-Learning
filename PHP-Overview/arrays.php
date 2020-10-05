<?php

// Indexed Arrays

echo "<h1>Indexed Arrays</h1>";
$languages = array("HTML", "CSS", "JS", "PHP");
echo "$languages <br>";

var_dump($languages);
echo "<br>";

print_r($languages);
echo "<br>";

echo "$languages[0] $languages[1] $languages[2] $languages[3]<br>";

foreach($languages as $language) {
    echo "$language ";
}
echo "<br>";

foreach($languages as $key => $value) {
    echo "$key: $value<br>";
}
echo "<br>";

// Associative Arrays

echo "<h1>Associative Arrays</h1>";

$age = array("John" => "25", "Henry" => "37", "Mohammad" => "21");
echo "$age <br>";

var_dump($age);
echo "<br>";

print_r($age);
echo "<br>";

echo $age["John"] . " " . $age["Henry"] . " " . $age["Mohammad"] . "<br>";

foreach($age as $key => $value) {
    echo "$key: $value <br>";
}

// Multidimensional Arrays 

echo "<h1>Multidimensional Arrays</h1>";

$people = array(
    array("Mohammad", "Agha", 21),
    array("John", "Doe", 30),
    array("Peter", "Pan", 50)
);

echo $people[0][0] . "  " . $people[0][1] . ", " . $people[0][2] . " years old.<br>";
echo $people[1][0] . "  " . $people[1][1] . ", " . $people[1][2] . " years old.<br>";
echo $people[2][0] . "  " . $people[2][1] . ", " . $people[2][2] . " years old.<br>";

foreach($people as $person) {
    foreach($person as $value) {
        echo "$value ";
    }
    echo "<br>";
}

$peeps = array(
    "Mohammad" => array("HTML", "CSS"),
    "John" => array("JS", "PHP"),
    "Foo" => array("Prolog", "Assembly") 
);

foreach($peeps as $key => $value) {
    echo "$key likes: ";
    foreach($value as $language) {
        echo "$language ";
    }
    echo "<br>";
}