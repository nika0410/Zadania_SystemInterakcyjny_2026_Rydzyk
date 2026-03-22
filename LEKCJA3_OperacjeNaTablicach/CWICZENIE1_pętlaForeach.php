<?php

require_once dirname(__FILE__) . '/debug.inc.php';

$persons = [
    [
        'first_name' => 'Mark',
        'surname' => 'Brown',
        'age' => '21',
    ],
    [
        'first_name' => 'John',
        'surname' => 'Doe',
        'age' => '22',
    ],
    [
        'first_name' => 'Ann',
        'surname' => 'Smith',
        'age' => '18',
    ],
];


//Tabelka
echo "<h2>Tabela osób:</h2>";
echo "<table border='1' cellpadding='5'>"; 
echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Wiek</th>
    </tr>";

foreach ($persons as $person) {
    echo "<tr>";
    echo "<td>" . $person['first_name'] . "</td>"; 
    echo "<td>" . $person['surname'] . "</td>";
    echo "<td>" . $person['age'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";


//Imiona wypisane dużymi literami
echo "<h2>Tabela osób gdzie imiona dużymi literami:</h2>";
echo "<table border='1' cellpadding='5'>"; 
echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Wiek</th>
    </tr>";

foreach ($persons as $person) {
    echo "<tr>";
    echo "<td>" . strtoupper($person['first_name']) . "</td>"; 
    echo "<td>" . $person['surname'] . "</td>";
    echo "<td>" . $person['age'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";


//Zwiększanie wieku

// Znak & przed $person oznacza "modyfikuj oryginał"
foreach ($persons as &$person) {
    // Zwiększamy wiek o 1 rok
    $person['age'] += 1; 
}

unset($person); //odznaczamy oryginał


// Wypisanie zmodyfikowanej tablicy na ekranie
echo "<h2>Tabela osób starszych o rok:</h2>";
echo "<table border='1' cellpadding='5'>"; 
echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Wiek</th>
    </tr>";

foreach ($persons as $person) {
    echo "<tr>";
    echo "<td>" . $person['first_name'] . "</td>"; 
    echo "<td>" . $person['surname'] . "</td>";
    echo "<td>" . $person['age'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";

?>