<?php

require_once dirname(__FILE__) . '/debug.inc.php';

//pierwsza tablica
$tab1 = ['plum', 'orange', 'banana', 'apple']; 

//posortowana pierwsza tablica w porządku leksykalnym
$posortowana_tab1 = $tab1; // Robimy kopię, żeby nie zepsuć oryginału
sort($posortowana_tab1); // Funkcja sort do zwykłego sortowania alfabetycznego A-Z

//druga tablica
$tab2 = ['first_name' => 'Mark', 'surname' => 'Brown', 'age' => '21']; 

//posortowana druga tablica w porządku leksykalnym
$posortowana_tab2 = $tab2;
asort($posortowana_tab2); // Funkcja asort aby było alfabetycznie i aby nie niszczyć kluczy

//trzecia tablica
$persons = [
    [
        'first_name' => 'Mark', 
        'surname' => 'Brown',
    ],
    [
        'first_name' => 'Ann',
        'surname' => 'Smith',
    ],
    [
        'first_name' => 'John',
        'surname' => 'Doe',
    ],
];

// Sortowanie według nazwisk
$persons_by_surname = $persons;
usort($persons_by_surname, function($a, $b) { //funkcja usort do podania wlasnego sortowania
    return $a['surname'] <=> $b['surname']; //porównuje a i b oraz przypisuje im 0 lub 1
});

// Sortowanie według imion
$persons_by_firstname = $persons;
usort($persons_by_firstname, function($a, $b) {
    return $a['first_name'] <=> $b['first_name'];
});


//=================================================


//wyświetlenie tabel i sortowań

echo "<h2>Tablica pierwsza</h2>";
foreach ($tab1 as $field) {
    echo $field . "<br>";
}

echo "<h2>Posortowana tablica pierwsza</h2>";
foreach ($posortowana_tab1 as $field) {
    echo $field . "<br>";
}

echo "<h2>Tablica druga</h2>";
foreach ($tab2 as $field) {
    echo $field . "<br>";
}

echo "<h2>Posortowana tablica druga</h2>";
foreach ($posortowana_tab2 as $field) {
    echo $field . "<br>";
}


//Tabelka
echo "<h2>Tablica trzecia:</h2>";
echo "<table border='1' cellpadding='5'>"; 
echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
    </tr>";

foreach ($persons as $person) {
    echo "<tr>";
    echo "<td>" . $person['first_name'] . "</td>"; 
    echo "<td>" . $person['surname'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";

//Tabelka
echo "<h2>Posortowana tablica trzecia według imion:</h2>";
echo "<table border='1' cellpadding='5'>"; 
echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
    </tr>";

foreach ($persons_by_firstname as $person) {
    echo "<tr>";
    echo "<td>" . $person['first_name'] . "</td>"; 
    echo "<td>" . $person['surname'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";

//Tabelka
echo "<h2>Posortowana tablica trzecia według nazwisk:</h2>";
echo "<table border='1' cellpadding='5'>"; 
echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
    </tr>";

foreach ($persons_by_surname as $person) {
    echo "<tr>";
    echo "<td>" . $person['first_name'] . "</td>"; 
    echo "<td>" . $person['surname'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";