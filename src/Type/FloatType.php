<?php

namespace StructureCheck\Type;

class FloatType implements TypeInterface
{
    private static $errorMessage = 'The value %s is not a float.';

    /**
     * @param mixed $value
     *
     * @return ResultInterface
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