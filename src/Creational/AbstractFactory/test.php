<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory;

use Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer\WriterFactory;

class Test
{
    private $writer;

    public function __construct(WriterFactory $writer)
    {
        $this->writer = $writer;
    }

    public function jsonWriter()
    {
        return $this->writer->createJsonWriter();
    }

    public function csvWriter()
    {
        return $this->writer->createCsvWriter();
    }

    public function json(array $data = [], bool $formatted)
    {
        $this->jsonWriter()->write($data, $formatted);
    }

    public function csv(array $line)
    {
        $this->csvWriter()->write($line);
    }
}