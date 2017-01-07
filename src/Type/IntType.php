<?php

namespace StructureCheck\Type;

use StructureCheck\Result;
use StructureCheck\ResultInterface;

/**
 * Class IntType
 * @package StructureCheck\Type
 */
class IntType implements TypeInterface
{
    private static $errorMessage = 'The value %s is not an integer.';

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        $checkResult = is_int($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}