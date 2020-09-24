<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class EnumType implements TypeInterface
{
    private array $values = [];

    private static string $errorMessage = 'The value %s is not in the allowed values (%s).';

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function check($value): ResultInterface
    {
        $checkResult = in_array($value, $this->values, true);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value), implode(',', $this->values))] : []
        );
    }
}
