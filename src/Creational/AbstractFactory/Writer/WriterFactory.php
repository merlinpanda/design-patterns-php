<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer;

interface WriterFactory
{
    /**
     * @return JsonWriter
     */
    public function createJsonWriter();

    /**
     * @return CsvWriter
     */
    public function createCsvWriter();
}