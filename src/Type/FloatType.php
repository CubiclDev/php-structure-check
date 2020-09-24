<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class FloatType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not a float.';

    public function check($value): ResultInterface
    {
        $checkResult = is_float($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}
