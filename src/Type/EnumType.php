<?php

namespace StructureCheck\Type;

use StructureCheck\Result;
use StructureCheck\ResultInterface;

class EnumType implements TypeInterface
{
    /**
     * @var array
     */
    private $values = [];

    /**
     * @var string
     */
    private static $errorMessage = 'The value %s is not in the allowed values (%s).';

    /**
     * EnumType constructor.
     *
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        $checkResult = in_array($value, $this->values, true);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value), implode(',', $this->values))] : []
        );
    }
}
