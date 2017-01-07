<?php

namespace StructureCheck\Type;

use StructureCheck\Result;
use StructureCheck\ResultInterface;

/**
 * Class BoolType
 * @package StructureCheck\Type
 */
class BoolType implements TypeInterface
{
    private static $errorMessage = 'The value %s is not a boolean.';

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        $checkResult = is_string($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}