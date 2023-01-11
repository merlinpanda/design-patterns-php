<?php

namespace Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\UnixWriter;

use Salvacheung\DesignPatternsPhp\Creational\AbstractFactory\Writer\JsonWriter;

class UnixJsonWriter implements JsonWriter
{
    public function write(array $data,bool $formatted = false)
    {
        $options = 0;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $options);
    }
}