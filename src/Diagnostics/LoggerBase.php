<?php
namespace QuickBooksOnline\API\Diagnostics;


/**
 * This file contains an interface for Logging.
 */
class LoggerBase {

    public $ServiceRequestLoggingLocation = PATH_SDK_ROOT;
    public $EnableRequestResponseLogging = 'false';

    /**
     * Logs messages depending on the ids trace level.
     *
     * @param TraceLevel $idsTraceLevel IDS Trace Level.
     * @param string $messageToWrite The message to write.
     *
     */
    public function Log($idsTraceLevel, $messageToWrite)
    {
        if ($this->EnableRequestResponseLogging === 'true') {
            file_put_contents(
                $this->ServiceRequestLoggingLocation . 'executionlog.txt',
                $messageToWrite . "\n",
                FILE_APPEND
            );
        }
    }
}
