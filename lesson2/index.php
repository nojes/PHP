<?php
/**
 *
 */

$a = 1;
$b = 'value';
$c = "$a $b";

if ($_GET['access'] == 1) {
    echo "hello";
} else {
    echo "Access denied";
}

echo $c;
