<?php
/**
 * @author Vyacheslav Nozhenko <vv.nojenko@gmail.com>
 */

$students = [
  [
      'name' => 'Vasya',
      'email' => 'email@example.com',
      'phone' => '+380123456789',
  ]
];

$serialized = serialize($students);
$unserialized = unserialize($serialized);

var_dump($serialized);
var_dump($unserialized);
?>

