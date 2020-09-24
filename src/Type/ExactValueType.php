<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class ExactValueType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not the same value as %s.';

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

    public function check($value): ResultInterface
    {
        $checkResult = $this->value === $value;

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value), $this->value)] : []
        );
    }
}
