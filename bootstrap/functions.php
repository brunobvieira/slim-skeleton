<?php
define("d", "die");

/**
 * dump_r($arg1, $arg2, $arg3, ..., d);
 * Debug function with
 */
function debug_r()
{
    $stop = false;
    $debug = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
    $trace = array_shift($debug);
    $args = func_get_args();

    echo '
		<div style="background-color: #ddd; color: #000; font-size: 14px;">
			<label>
				Line --> <span>' . $trace['line'] . '</span><br>
				File --> <span>' . $trace['file'] . '</span><br>
			</label>
		</div>';

    echo '<pre style="white-space: pre-wrap;">';

    foreach ($args as $index => $value) {

        if ($value === d) $stop = true;
        echo '<label style="color:red; font-weight: bold;">Parameter ' . ($index + 1) . '</label><br>';
        var_dump($value);
        echo '<br><br>';

    }

    echo '</pre>';

    if ($stop) {
        die;
    }
}