<?php
/**
 * ### PHP data types
 *
 * Scalar types:
 *  boolean
 *  integer
 *  float
 *  string
 *
 * Compound types:
 *  array
 *  object
 *  callable
 *
 * Special types:
 *  resource
 *  NULL
 *
 * Pseudo-types:
 *  mixed
 *  number
 *  callback
 *  array|object
 *  void
 *
 * And pseudo-variable: $...
 *
 *
 * @author Vyacheslav Nozhenko <vv.nojenko@gmail.com>
 */

// Variables
$hello_string = "Hello world!";
echo "$hello_string" . '<br>';

// Useful functions
var_dump($hello_string);

// Constants
define("Pi", 3.14159265359, true);
const PI = 3.14159265359;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 1</title>
</head>
<body>

<h1><?php echo $hello_string ?></h1>
<p><?= $hello_string ?></p>
<p>Pi = <?= Pi ?></p>
<p>PI = <?= PI ?></p>


</body>
</html>