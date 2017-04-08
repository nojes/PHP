<?php
/**
 * @author Vyacheslav Nozhenko <vv.nojenko@gmail.com>
 */

ini_set('display_errors', 'on');
error_reporting(E_ALL);

$a = intval($_GET['a'] ?? 0);
$b = intval($_GET['b'] ?? 0);
$res = 0;
$op = $_GET['op'] ?? '+';

switch ($op) {
    case '+':
        $res = $a + $b;
        break;

    case '-':
        $res = $a - $b;
        break;

    case '*':
        $res = $a * $b;
        break;

    case '/':
        $res = $a / $b;
        break;
}

?>

<form action="">
    <label>
        <input type="number" name="a" value="<?= $a ?>">
    </label>
    <select name="op" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <label>
        <input type="number" name="b" value="<?= $b ?>">
    </label>
    <button type="submit">Calc</button>
</form>
<?php if(!empty($res)): ?>
    <h1><?= "$a $op $b = $res" ?></h1>
<?php endif; ?>
