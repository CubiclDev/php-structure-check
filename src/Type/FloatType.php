<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class FloatType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not a float.';

    public function check(string $key, $value): ResultInterface
    {
        $checkResult = is_float($value);

        return $checkResult
            ? Result::valid()
            : Result::invalid([new Error($key, sprintf(self::$errorMessage, json_encode($value)))]);
    }
}
