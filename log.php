<?php

class Log
{
    private $f3ilename;
    private $handle;

    public function __construct($prefix = 'log')
    {
        $this->setFilename($prefix);
        $this->setHandle();

    }

    public function logMessage($logLevel, $message)
    {
        date_default_timezone_set('America/Chicago');
        $date = date('Y-d-m');
        $time = date('H:i:s');
        fwrite($this->getHandle(), "$date $time [$logLevel] $message\n");

    }

    public function logInfo($message)
    {
        $this->logMessage('Info', $message);
    }

    public function logError($message)
    {
        $this->logMessage('Error', $message);
    }


    public function getFilename()
    {
        return $this->filename;
    }

    public function getHandle()
    {
        return $this->handle;
    }

    public function setFilename($prefix)
    {
        if (!is_string($prefix)) {
            $prefix = ((string)$prefix);

        }
        date_default_timezone_set('America/Chicago');
        $this->filename = $prefix . '-' . date('Y-d-m') . '.log';
    }

    public function setHandle()
    {
        $this->handle = fopen($this->getFilename(), 'a');
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}