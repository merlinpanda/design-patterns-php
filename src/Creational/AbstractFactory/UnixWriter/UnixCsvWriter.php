<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\UnixWriter;

use Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer\CsvWriter;

class UnixCsvWriter implements CsvWriter
{
    public function write(array $line)
    {
        return join(",", $line) . "\n";
    }
}