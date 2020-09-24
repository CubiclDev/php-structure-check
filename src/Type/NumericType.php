<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class NumericType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not a numeric value.';

    public function check($value): ResultInterface
    {
        $checkResult = is_numeric($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}
