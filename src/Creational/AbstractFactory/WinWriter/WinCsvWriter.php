<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\WinWriter;

use Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer\CsvWriter;

class WinCsvWriter implements CsvWriter
{
    public function write(array $line)
    {
        return join(",", $line) . "\r\n";
    }
}