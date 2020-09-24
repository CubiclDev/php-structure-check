<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class StringType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not a string.';

    public function check($value): ResultInterface
    {
        $checkResult = is_string($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}
