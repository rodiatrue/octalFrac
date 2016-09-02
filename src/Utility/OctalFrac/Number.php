<?php

namespace Utility\OctalFrac;


class Number
{
    /**
     * @var float
     */
    private $number;

    /**
     * @var string
     */
    private $base;

    /**
     * @return float
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param float $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param string $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }
}
