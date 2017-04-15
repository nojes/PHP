<?php
include "menu_items.php";

/**
 * Menu default view.
 *
 * @var array $menu_items
 * @author Vyacheslav Nozhenko <vv.nojenko@gmail.com>
 */

?>

<ul class="menu">
    <?php foreach ($menu_items as $item): ?>
        <li class="menu-item">
            <a href="<?= $item['url'] ?>"><?= $item['label'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>
