<?php

namespace Cubicl\StructureCheck\Check;

use Countable;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;
use Cubicl\StructureCheck\Type\TypeInterface;

/**
 * Class CountCheck
 * @package Cubicl\StructureCheck\Check
 */
class CountCheck implements TypeInterface
{
    private static string $countErrorMessage = 'The given countable %s has not the expected count %d.';

    private static string $countableErrorMessage = 'The given value %s is not a countable';

    private TypeInterface $child;

    private int $count;

    public function __construct(TypeInterface $child, int $count)
    {
        $this->child = $child;
        $this->count = $count;
    }

    public function check($value): ResultInterface
    {
        $result = $this->child->check($value);

        if (!$result->isValid()) {
            return $result;
        }

        if (!$value instanceof Countable) {
            return new Result(
                false,
                [sprintf(self::$countableErrorMessage, json_encode($value))]
            );
        }

        if (count($value) !== $this->count) {
            return new Result(
                false,
                [sprintf(self::$countErrorMessage, json_encode($value), $this->count)]
            );
        }

        return new Result(true);
    }
}
