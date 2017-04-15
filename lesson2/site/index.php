<?php
require "library/main.php";

/**
 * @author Vyacheslav Nozhenko <vv.nojenko@gmail.com>
 */

// /lesson2/site/
// /lesson2/site/?page=contacts

$requestPage = (empty($_GET['page'])) ? 'home' : $_GET['page'];

includeTemplate('header');
requirePage($requestPage);
includeTemplate('footer');
