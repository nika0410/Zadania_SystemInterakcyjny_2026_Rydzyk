<?php
/**
 * Template for view all bookmarks.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */
?>

<?php if (isset($view['bookmarks'])) : ?>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>URL</th>
        <th>Akcja</th> </tr>
    </thead>
    <tbody>
    <?php foreach ($view['bookmarks'] as $id => $bookmark): ?>
        <tr>
            <td><?php echo $bookmark['title'] ?? ''; ?></td>
            <td><?php echo $bookmark['url'] ?? ''; ?></td>
            
            <td>
                <a href="view.php?id=<?php echo $id; ?>">Szczegóły</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else : ?>
    <p>No data!</p>
<?php endif; ?>