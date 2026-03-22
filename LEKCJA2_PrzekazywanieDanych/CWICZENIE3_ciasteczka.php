<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

//zmienna do obliczania odwiedzin
//sprawdzamy czy licznik istnieje i czy ma wartość
//jak nie ma to zaczynamy od 0 i doliczamy od razu pierwszą wizytę
//jak ma ustawioną wartość to dodajemy o niej 1
$aktualne_odwiedziny = ($_COOKIE['licznik'] ?? 0) + 1; 

//ustawiamy ciasteczko (nazwa, zmienna, czas), wygaśnie po godzinie
setcookie('licznik', $aktualne_odwiedziny, time() + 3600);

echo "To jest Twoja wizyta numer: " . $aktualne_odwiedziny;
?>