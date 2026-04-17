<?php
/**
 * Template for view single bookmark.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */
?>

<?php if (isset($view['bookmarks']) && $view['bookmarks'] !== null) : ?>
    <h2><?php echo $view['bookmarks']['title'] ?? ''; ?></h2>
    <p>
        <strong>URL:</strong> 
        <a href="<?php echo $view['bookmarks']['url'] ?? ''; ?>" target="_blank">
            <?php echo $view['bookmarks']['url'] ?? ''; ?>
        </a>
    </p>
    <p>
        <strong>Tags:</strong> 
        <?php echo isset($view['bookmarks']['tags']) ? implode(', ', $view['bookmarks']['tags']) : ''; ?>
    </p>
<?php else : ?>
    <p style="color: red;">Bookmark not found!</p>
<?php endif; ?>

<br>
<a href="index.php">Wróć do listy</a>