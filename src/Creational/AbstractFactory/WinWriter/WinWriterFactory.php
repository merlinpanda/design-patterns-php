<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\WinWriter;

use Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer\WriterFactory;

class WinWriterFactory implements WriterFactory
{
    public function createCsvWriter()
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter()
    {
        return new WinCsvWriter();
    }
}