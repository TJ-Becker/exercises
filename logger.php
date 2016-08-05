<?php
date_default_timezone_set ('America/Chicago');
function logMessage($logLevel, $message)
{
    // todo - complete this function
        $date = date('Y-n-d');
        $handle = fopen($date, 'a');
        fwrite($handle, $date . ' [' . $logLevel . '] ' . $message . PHP_EOL);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");
