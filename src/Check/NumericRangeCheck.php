<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Check;

use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;
use Cubicl\StructureCheck\Type\TypeInterface;

class NumericRangeCheck implements TypeInterface
{
    /**
     * @var string
     */
    private static $lowerBoundErrorMessage = 'The given lower bound %f is greater than the given value %f.';

    /**
     * @var string
     */
    private static $upperBoundErrorMessage = 'The given upper bound %f is smaller than the given value %f.';

    /**
     * @var TypeInterface
     */
    private $child;

    /**
     * @var int
     */
    private $lowerBound;

    /**
     * @var int
     */
    private $upperBound;

    public function __construct(TypeInterface $child, int $upperBound, int $lowerBound)
    {
        $this->child = $child;
        $this->upperBound = $upperBound;
        $this->lowerBound = $lowerBound;
    }

    /**
     * @param mixed $value
     */
    public function check(string $key, $value): ResultInterface
    {
        $result = $this->child->check($key, $value);

        if (!$result->isValid()) {
           return $result;
        }

        if ($this->lowerBound > $value) {
            return Result::invalid([
                new Error($key, sprintf(self::$lowerBoundErrorMessage, $this->lowerBound, $value))
            ]);
        }

        if ($this->upperBound < $value) {
            return Result::invalid([
                new Error($key, sprintf(self::$upperBoundErrorMessage, $this->lowerBound, $value))
            ]);
        }

        return Result::valid();
    }
}
