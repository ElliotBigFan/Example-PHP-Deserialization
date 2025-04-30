<?php
class Logger {
    public $logFile;
    public $message;

    function __destruct(){
        file_put_contents($this->logFile, $this->message);
    }
}
?>