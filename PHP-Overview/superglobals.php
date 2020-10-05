<?php

echo "<h1>All Superglobals</h1>";
echo "
    <ul>
        <li>\$GLOBALS</li>
        <li>\$_SERVER</li>
        <li>\$_REQUEST</li>
        <li>\$_POST</li>
        <li>\$_GET</li>
        <li>\$_FILES</li>
        <li>\$_ENV</li>
        <li>\$_COOKIE</li>
        <li>\$_SESSION</li>
    </ul>
";

echo "<h1>GLOBALS</h1>";

$a = 20;
$b = 30;

function add() {
    $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
}
add();
echo "$z";

echo "<h1>SERVER</h1>";

echo "
    <table border=1>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
";
foreach($_SERVER as $key => $var) {
    echo "<tr><td>$key</td><td>$var</td></tr>";
}
echo "</table>";