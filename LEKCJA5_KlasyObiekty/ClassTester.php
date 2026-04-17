<?php declare(strict_types=1);

require_once __DIR__ . '/debug.inc.php';
require_once __DIR__ . '/Ship.php';


// Zwykłe tworzenie obiektu
$myShip = new Ship();
$myShip->setName('Bluenose');
$myShip->setHomeport('Lunenburg');

// Używamy akcesora (get) zamiast bezpośredniego odwołania
echo 'Ship name: ' . $myShip->getName() . '<br>'; 

var_dump($myShip);

// Kopiowanie referencji - przypisanie
$anotherShip = $myShip;

$anotherShip->setName('RMS Titanic');
$anotherShip->setHomeport('Liverpool');

// Po przypisaniu
var_dump($myShip);
var_dump($anotherShip);

// Klonowanie obiektu
$myShip = new Ship();
$myShip->setName('Bluenose');
$myShip->setHomeport('Lunenburg');

$anotherShip = clone $myShip;

$anotherShip->setName('RMS Titanic');
$anotherShip->setHomeport('Liverpool');

// Po sklonowaniu
var_dump($myShip);
var_dump($anotherShip);