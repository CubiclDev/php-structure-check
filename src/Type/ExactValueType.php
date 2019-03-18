<?php

namespace StructureCheck\Type;

use StructureCheck\Result;
use StructureCheck\ResultInterface;

class ExactValueType implements TypeInterface
{

    /**
     * @var string
     */
    private static $errorMessage = 'The value %s is not the same value as %s.';

    /** @var mixed */
    private $value;

    /**
     * ExactValueType constructor.
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        $checkResult = $this->value === $value;

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value), $this->value)] : []
        );
    }
}
