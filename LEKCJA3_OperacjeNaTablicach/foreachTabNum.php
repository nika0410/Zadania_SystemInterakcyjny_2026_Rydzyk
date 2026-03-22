<?php
require_once dirname(__FILE__) . '/debug.inc.php';

$tab = [
    'Python',
    'Java',
    'C++',
    'PHP',
];

foreach ($tab as $item) {
    echo $item . PHP_EOL;
}

echo "<br>";

foreach ($tab as $key => $value) {
    echo $key . ' : ' . $value . "<br>" . PHP_EOL;
}