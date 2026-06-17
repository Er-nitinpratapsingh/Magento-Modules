<?php

namespace Learning\SystemLogViewer\Block\Adminhtml\Log;

use Magento\Backend\Block\Template;

class View extends Template
{
    public function getLogContent()
    {
        $logFile = BP . '/var/log/system.log';

        if (!file_exists($logFile)) {
            return 'system.log file not found.';
        }

        $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (!$lines) {
            return 'No logs found.';
        }

        $lastLines = array_slice($lines, -50);

        return nl2br(
            $this->escapeHtml(
                implode(PHP_EOL, $lastLines)
            )
        );
    }
}