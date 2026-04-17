<?php

require_once __DIR__ . '/debug.inc.php';

/**
 * Bookmarks.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */

/**
 * Class BookmarksCsv.
 */
class BookmarksCsv
{
    /**
     * Bookmarks.
     *
     * @var array $bookmarks
     */
    protected $bookmarks = [];

    /**
     * Bookmarks constructor.
     */
    public function __construct()
    {
        $this->bookmarks = $this->loadData();
    }

    /**
     * Find all bookmarks.
     *
     * @return array Result
     */
    public function findAll(): array 
    {
        return $this->bookmarks;
    }

    /**
     * Find bookmark by its id.
     *
     * @param integer $id Bookmark id
     *
     * @return array Result
     */
    public function findOneById(int $id): array 
    {
        $bookmark = [];

        if (isset($this->bookmarks[$id]) && count($this->bookmarks[$id])) {
            $bookmark = $this->bookmarks[$id];
        }

        return $bookmark;
    }

    /**
     * Load data from CSV file.
     *
     * @see https://www.php.net/manual/en/function.fgetcsv.php
     *
     * @return array Result
     */
    protected function loadData(): array 
    {
        // TODO: implement it!
        $data = [];
        $file = __DIR__ . '/bookmarks.csv';

        if (($handle = fopen($file, 'r')) !== false) {
            fgetcsv($handle, 1000, ',', '"', '\\');
            while (($row = fgetcsv($handle, 1000, ',', '"', '\\')) !== false) {
                $id = (int)$row[0];
                $data[$id] = [
                    'title' => $row[1],
                    'url'   => $row[2],
                    'tags'  => explode(',', $row[3])
                ];
            }
            fclose($handle);
        }
        return $data;
    }
}