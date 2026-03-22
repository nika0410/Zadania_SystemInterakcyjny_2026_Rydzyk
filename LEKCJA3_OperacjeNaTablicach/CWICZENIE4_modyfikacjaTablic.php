<?php

require_once dirname(__FILE__) . '/debug.inc.php';

$tab = ['plum', 'orange', 'banana', 'apple'];

$tab = array_map('strtoupper', $tab);

echo "<pre>";
print_r($tab);
echo "</pre>";
?>