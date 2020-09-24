<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class IntType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not an integer.';

    public function check($value): ResultInterface
    {
        $checkResult = is_int($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}
