<?php

namespace StructureCheck\Type;

use StructureCheck\Result;
use StructureCheck\ResultInterface;

class NumericType
{
    private static $errorMessage = 'The value %s is not a numeric value.';

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        $checkResult = is_numeric($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}
