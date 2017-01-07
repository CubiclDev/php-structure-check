<?php

namespace StructureCheck\Type;

use StructureCheck\Result;

class FloatType implements TypeInterface
{
    private static $errorMessage = 'The value %s is not a float.';

    /**
     * @inheritdoc
     */
    public function check($value)
    {
        $checkResult = is_float($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}