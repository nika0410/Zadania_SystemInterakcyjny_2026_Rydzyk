<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$name = !empty($_POST['name']) ? $_POST['name'] : 'World';

echo 'Hello ' . $name . ' !';