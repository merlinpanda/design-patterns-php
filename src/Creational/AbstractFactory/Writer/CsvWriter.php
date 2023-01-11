<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer;

interface CsvWriter
{
    public function write(array $line);
}