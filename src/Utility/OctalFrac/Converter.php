<?php

namespace Utility\OctalFrac;

class Converter implements ConverterInterface
{
    /**
     * @var string
     */
    private $base;

    /**
     * Converter constructor.
     * @param string $base
     */
    public function __construct($base)
    {
        $this->base = $base;
    }

    public function convert(Number $number)
    {

    }
}
