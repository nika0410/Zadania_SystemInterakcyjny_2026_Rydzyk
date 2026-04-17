<?php

require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/bookmark.inc.php';


// Pobieramy ID z paska adresu, inicjujemy to w pliku index.php
// operator ?? na wypadek gdyby ktoś wszedł bez podania ID
$get_id = $_GET['id'] ?? null;

// wywołujemy funkcję find_one_by_id
if ($get_id !== null) {
    $bookmark = find_one_by_id((int)$get_id); //wymuszamy aby get_id było int
} else {
    $bookmark = null;
}


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Szczegóły zakładki</title>
</head>
<body>

    <?php if ($bookmark !== null): ?>
        
        <h1>Szczegóły: <?= $bookmark['title'] ?></h1>
        <p>
            <strong>Adres URL:</strong> 
            <a href="<?= $bookmark['url'] ?>" target="_blank"><?= $bookmark['url'] ?></a>
        </p>
        <p>
            <strong>Przypisane tagi:</strong> <?= implode(', ', $bookmark['tags']) ?>
        </p>
        
    <?php else: ?>
        
        <h1 style="color: red;">Błąd 404</h1>
        <p>Niestety, taka zakładka nie istnieje w naszej bazie.</p>
        
    <?php endif; ?>

    <hr>
    <a href="index.php">Powrót do listy zakładek</a>

</body>
</html>