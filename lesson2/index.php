<?php
/**
 * @author Vyacheslav Nozhenko <vv.nojenko@gmail.com>
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP > Lesson 2</title>
</head>
<body>

<h3>Multiplication table</h3>
<? $size = 11; ?>
<table>
    <?php for ($i = 1; $i <= $size; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= $size; $j++): ?>
                <td><?= $j * $i ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<h3>Simple menu</h3>
<?php include "menu/index.php" ?>

</body>
</html>
