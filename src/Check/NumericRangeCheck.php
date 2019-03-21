<?php

namespace Cubicl\StructureCheck\Check;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\Type\TypeInterface;

/**
 * Class NumericRangeCheck
 * @package Cubicl\StructureCheck\Check
 */
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

    /**
     * @param TypeInterface $child
     * @param int $upperBound
     * @param int $lowerBound
     */
    public function __construct(TypeInterface $child, $upperBound, $lowerBound)
    {
        $this->child = $child;
        $this->upperBound = $upperBound;
        $this->lowerBound = $lowerBound;
    }

    /**
     * @inheritdoc
     */
    public function check($value)
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
