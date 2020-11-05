<?php 

# Beetje raar dit

/**
 * addLog - Add message to our default log
 *
 * @param  mixed $msg
 * @param  mixed $append
 *
 * @return void
 */
function addLog($msg = '', $append=true) {

    $flags = $append ? FILE_APPEND : 0;

    file_put_contents(__DIR__ . '/log.txt', $msg . PHP_EOL, $flags);
}