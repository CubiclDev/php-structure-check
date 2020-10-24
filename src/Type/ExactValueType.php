<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class ExactValueType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not the same value as %s.';

    /** @var mixed */
    private $value;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function check(string $key, $value): ResultInterface
    {
        $checkResult = $this->value === $value;

        return $checkResult
            ? Result::valid()
            : Result::invalid([
                new Error($key, sprintf(self::$errorMessage, json_encode($value), json_encode($this->value)))
            ]);
    }
}
