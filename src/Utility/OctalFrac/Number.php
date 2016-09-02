<?php

namespace Utility\OctalFrac;


class Number
{
    /**
     * @var float
     */
    private $number;

    /**
     * @var int
     */
    private $base;

    /**
     * Number constructor.
     * @param float $number
     * @param string $base
     */
    public function __construct($number, $base)
    {
        $this->number = $number;
        $this->base = $base;
    }

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
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param int $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * @return float
     */
    public function convertNumber()
    {
        $value = $this->number . '';
        $decimal = explode('.', $value);
        if (count($decimal) != 2 && !$this->isOctal($decimal[1])) {
            return 0.0;
        }

        $result = 0.0;
        for ($i = 0; $i < strlen($decimal[1]); $i++) {
            $result += (float)substr($decimal[1], $i, 1) * pow($this->base, -($i + 1));
        }

        return $result;
    }

    private function isOctal($x)
    {
        return decoct(octdec($x)) == $x;
    }
}
