<?php
/**
 *
 */

$a = 1;
$b = 'value';
$c = "$a $b";

if ($_GET['access'] == 1) {
    echo 'hello';
} else {
    echo 'Access denied';
}

echo $c . '<br><br>';
?>

<?
/**
 * Simple multiplication table example
 */
$size = 11;
?>
<table>
    <?php for ($i = 1; $i <= $size; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= $size; $j++): ?>
                <td><?= $j * $i ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
