<?php

/**
 * @file
 * Doc comment.
 */

$a = 3;
$b = 4;
echo($a + $b);

/**
 * Function comment string.
 */
function a_test($string) {
  echo '\nHi: ' . $string;
  var_dump(debug_backtrace());
}

a_test('friend');
phpinfo();
