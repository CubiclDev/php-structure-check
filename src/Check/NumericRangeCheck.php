<?php

namespace Cubicl\StructureCheck\Check;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;
use Cubicl\StructureCheck\Type\TypeInterface;

class NumericRangeCheck implements TypeInterface
{
    private static string $lowerBoundErrorMessage = 'The given lower bound %f is greater than the given value %f.';

    private static string $upperBoundErrorMessage = 'The given upper bound %f is smaller than the given value %f.';

    private TypeInterface $child;

    private int $lowerBound;

    private int $upperBound;

    public function __construct(TypeInterface $child, int $upperBound, int $lowerBound)
    {
        $this->child = $child;
        $this->upperBound = $upperBound;
        $this->lowerBound = $lowerBound;
    }

    public function check($value): ResultInterface
    {
        $result = $this->child->check($value);

        if (!$result->isValid()) {
           return $result;
        }

        if ($this->lowerBound > $value) {
            return new Result(
                false,
                [sprintf(self::$lowerBoundErrorMessage, $this->lowerBound, $value)]
            );
        }

        if ($this->upperBound < $value) {
            return new Result(
                false,
                [sprintf(self::$upperBoundErrorMessage, $this->upperBound, $value)]
            );
        }

        return new Result(true);
    }
}
