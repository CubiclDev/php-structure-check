<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class NumericType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not a numeric value.';

    public function check(string $key, $value): ResultInterface
    {
        $checkResult = is_numeric($value);

        return $checkResult
            ? Result::valid()
            : Result::invalid([new Error($key, sprintf(self::$errorMessage, json_encode($value)))]);
    }
}
