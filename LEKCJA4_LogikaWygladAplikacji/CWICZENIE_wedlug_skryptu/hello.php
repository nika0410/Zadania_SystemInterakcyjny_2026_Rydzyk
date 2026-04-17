<?php
/**
 * Hello World script using the template engine.
 */
require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/templates.inc.php';

// 1. Inicjalizujemy naszą "walizkę" na dane
$view = [];

// 2. Podajemy tytuł strony (wyląduje w tagu <title> w base.html.php)
$view['title'] = 'Strona Hello World';

// 3. Wskazujemy, który plik z folderu templates ma zostać wczytany (bez rozszerzenia!)
$view['template'] = 'hello';

// 4. Przekazujemy naszą wiadomość do szablonu
$view['message'] = 'Hello World!';

// 5. Odpalamy silnik!
render($view);