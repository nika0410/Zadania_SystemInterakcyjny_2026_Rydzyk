<?php
/*
 * View all bookmarks.
 * 
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */

require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/bookmark.inc.php';

// ...

// Pobieramy wszystkie zakładki z pliku inc/bookmarks.inc.php
$bookmarks = find_all();

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista wszystkich zakładek</title>
</head>
<body>
    <h1>Moje zakładki</h1>
    
    <ul>
        <?php foreach ($bookmarks as $id => $bookmark): ?>
            <li>
                <a href="<?= $bookmark['url'] ?>" target="_blank"> <!--link pobrany z bookmark.inc.php; target blank otwiera link w nowej karcie -->
                    <?= $bookmark['title'] ?> <!-- tytuł wyświetlony do kliknięcia-->
                </a>
                
                <br>
        <!-- implode sklei tagi, które znajdują się w tabeli, w ciągły tekst-->
                <small>Tagi: <?= implode(', ', $bookmark['tags']) ?></small>
                
                <br>
        <!-- przekazujemy metodą GET adres zakładki z foreach do pliku view.php-->
                <a href="view.php?id=<?= $id ?>">Zobacz szczegóły;</a>
            </li>
            <hr>
        <?php endforeach; ?>
    </ul>

</body>
</html>


<?php
// SZYBKI TEST: Szukamy zakładki o indeksie 1 (czyli drugiej w kolejności)
$testowa_zakladka = find_one_by_id(1);

echo "<h3>TEST DZIAŁANIA FUNKCJI:</h3>";
echo "<pre>";
print_r($testowa_zakladka);
echo "</pre>";
?>