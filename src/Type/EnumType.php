<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class EnumType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not in the allowed values (%s).';

    private array $values;

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function check(string $key, $value): ResultInterface
    {
        $checkResult = in_array($value, $this->values, true);
        return $checkResult
            ? Result::valid()
            : Result::invalid([
                new Error($key, sprintf(self::$errorMessage, json_encode($value), implode(',', $this->values)))
            ]);
    }
}
