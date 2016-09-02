<?php

namespace Utility\OctalFrac;


class ConverterFactory
{
    public function createConverter()
    {
        return new Converter();
    }
}
