<?php
/**
 * Data file.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */

/*
 * Find all records.
 *
 * @return array Result
 */

function find_all() : array
{
    return [
        [
            'title' => 'PHP manual',
            'url'   => 'https://www.php.net',
            'tags'  => [
                'PHP',
                'manual',
            ],
        ],
        [
            'title' => 'Silex',
            'url'   => 'http://silex.sensiolabs.org',
            'tags'  => [
                'PHP',
                'framework',
                'Silex',
            ],
        ],
        [
            'title' => 'Learn Git Branching',
            'url'   => 'http://learngitbranching.js.org',
            'tags'  => [
                'tools',
                'Git',
                'VCS',
                'tutorials',
            ],
        ],
        [
            'title' => 'PhpStorm',
            'url'  => 'https://www.jetbrains.com/phpstorm',
            'tags' => [
                'tools',
                'IDE',
                'PHP',
            ],
        ],
        [
            'title' => 'Twig',
            'url'  => 'http://twig.sensiolabs.org',
            'tags' => [
                'tools',
                'templates',
                'Twig',
                'Silex',
                'PHP',
            ],
        ],
    ];
}


/**
 * Find one record by ID.
 *
 * @param int $id Bookmark ID
 * @return array|null Result or null if not found
 */
function find_one_by_id(int $id): ?array //zapis ?array - zwróci albo tablicę albo null jeżeli nie znajdzie tablicy
{
    // Pobieramy wszystkie zakładki
    $bookmarks = find_all();

    // Sprawdzamy, czy w tablicy istnieje element o takim numerze indeksu ($id)
    if (isset($bookmarks[$id])) {
        // Jeśli tak, zwracamy tylko ten jeden konkretny element
        return $bookmarks[$id];
    }

    // Jeśli ktoś podał zły numer , zwracamy null
    return null;
}