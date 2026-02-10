<?php

class OTUSLogger
{
    # Записывает префикс OTUS в лог
    public static function log($message)
    {
        # Делаем строку с датой и префиксом OTUS
        $entry = "[" . date('Y-m-d H:i:s') . "] OTUS " . $message . "\n";
        
        # Путь к файлу лога
        $logFile = $_SERVER['DOCUMENT_ROOT'] . '/otus.log';
        
        # Запись в конец файла
        return file_put_contents($logFile, $entry, FILE_APPEND) !== false;
    }
}