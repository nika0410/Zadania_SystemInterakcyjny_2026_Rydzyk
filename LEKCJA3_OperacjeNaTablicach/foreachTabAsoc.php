<?php
require_once dirname(__FILE__) . '/debug.inc.php';

$person = [
    'first_name' => 'Mark',
    'surname' => 'Brown',
    'age' => '21',
];

foreach ($person as $field) {
    echo $field . PHP_EOL;
}

echo "<br>";

foreach ($person as $key => $value) {
    echo $key . ' : ' . $value . "<br>" . PHP_EOL;
}