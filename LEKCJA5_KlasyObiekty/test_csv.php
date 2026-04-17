<?php declare(strict_types=1);

require_once __DIR__ . '/debug.inc.php';
require_once __DIR__ . '/BookmarkCsv.php';

echo "<h3>Test 1: findAll</h3>";

// odpalamy construct
$bazaZakladek = new BookmarksCsv();

// prosimy obiekt, żeby dał nam wszystkie przeczytane zakładki
$wszystkie = $bazaZakladek->findAll();

// Używamy <pre>, żeby przeglądarka ładnie sformatowała tablicę
echo "<pre>";
print_r($wszystkie);
echo "</pre>";

echo "<hr>";

echo "<h3>Test 2: findOneById</h3>";

$tylkoJedna = $bazaZakladek->findOneById(3);

echo "<pre>";
print_r($tylkoJedna);
echo "</pre>";