<?php
// your code
echo('Hi');
// start profiling

$a = 3;
$b = 4;
echo($a + $b);


xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
// the code you want to profile

/**
 * Function comment string.
 */
function a_test($string) {
    echo '\nHi: ' . $string;
}
a_test('friend');


// stop profiler
$xhprof_data = xhprof_disable();
include_once "/var/www/xhprof-0.9.4/xhprof_lib/utils/xhprof_lib.php";
include_once "/var/www/xhprof-0.9.4/xhprof_lib/utils/xhprof_runs.php";
$xhprof_runs = new XHProfRuns_Default();
$run_id = $xhprof_runs->save_run($xhprof_data, "test");
/*
// ignore builtin functions and call_user_func* during profiling
$ignore = array('call_user_func', 'call_user_func_array');
xhprof_enable(0, array('ignored_functions' =&gt;  $ignore));
*/

print_r($xhprof_data );