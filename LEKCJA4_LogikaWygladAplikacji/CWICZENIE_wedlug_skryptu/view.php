<?php
/**
 * View single bookmark.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */
require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/bookmarks.inc.php';
require_once __DIR__ . '/inc/templates.inc.php';

$view = [];
$view['title'] = 'Bookmark Details';
$view['template'] = 'view';

$id = $_GET['id'] ?? null;
$view['bookmarks'] = null;


if ($id !== null) {
    $view['bookmarks'] = find_one_by_id((int)$id);
}

render($view);
