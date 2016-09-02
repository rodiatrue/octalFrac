<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 9/1/16
 * Time: 21:00
 */

namespace Utility\OctalFrac;


class NumberBuilder implements NumberBuilderInterface
{
    /**
     * @var Number
     */
    private $number;

    /**
     * NumberBuilder constructor.
     * @param float $number
     * @param string $base
     */
    public function __construct($number, $base)
    {
        $this->number = new Number($number, $base);
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function convertNumber()
    {
        $this->number->convertNumber();
    }
}
