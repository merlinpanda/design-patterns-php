<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\UnixWriter;

use Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer\WriterFactory;

class UnixWriterFactory implements WriterFactory
{
    public function createJsonWriter()
    {
        return new UnixJsonWriter();
    }

    public function createCsvWriter()
    {
        return new UnixCsvWriter();
    }
}