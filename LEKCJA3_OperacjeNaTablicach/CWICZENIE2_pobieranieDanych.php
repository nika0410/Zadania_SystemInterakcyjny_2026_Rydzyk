<?php

require_once dirname(__FILE__) . '/debug.inc.php';

/*Funkcja 
która przyjmie dwa argumenty: 
tablicę, z której pobieramy dane (POST/GET) 
i tablicę wzorca, 
a na wyjściu zwraca tablicę z danymi pobranymi z żądania, 
przy czym, jeżeli użytkownik ich nie uzupełnił, ustawia wartość pola na ciąg pusty.
*/

function get_request_data($request_source, $pattern) {
    $data = []; //tablica pomocnicza na pierwsze dane
    
    foreach ($pattern as $field) {
        
        $raw_value = $request_source[$field] ?? ''; //w przypadku nie podania wartości będzie NULL
        
        $data[$field] = trim($raw_value); //usunięcie whitespace
    }
    
    return $data; //zwracamy czyste dane
}




//wzorzec
$expected_fields = ['firstName', 'lastName', 'email', 'age'];

//dane gotowe do wyświetlenia, REQUEST pobiera zarówno z POST i GET, expected_fields pobiera dane ze wzorca
$cleaned_data = get_request_data($_REQUEST, $expected_fields);


//wyświetlanie odebranych danych
echo "<h3>Odebrane i wyczyszczone dane:</h3>";
echo "<pre>";
print_r($cleaned_data);
echo "</pre>";

?>