<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer;

interface JsonWriter
{
    public function write(array $data,bool $formatted = false);
}