<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class IntType implements TypeInterface
{
    private static $errorMessage = 'The value %s is not an integer.';

    public function check(string $key, $value): ResultInterface
    {
        $checkResult = is_int($value);

        return $checkResult
            ? Result::valid()
            : Result::invalid([new Error($key, sprintf(self::$errorMessage, json_encode($value)))]);
    }
}
