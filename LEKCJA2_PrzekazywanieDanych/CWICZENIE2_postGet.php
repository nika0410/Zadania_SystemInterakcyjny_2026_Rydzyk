<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$name = $_POST['name'] ?? $_GET['name'] ?? 'World';

echo 'Hello ' . $name . ' !';