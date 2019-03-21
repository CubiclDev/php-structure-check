<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

/**
 * Class BoolType
 * @package Cubicl\Cubicl\StructureCheck\Type
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
        $checkResult = is_bool($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }
}