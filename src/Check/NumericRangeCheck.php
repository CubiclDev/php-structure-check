<?php

namespace StructureCheck\Check;

use StructureCheck\Type\TypeInterface;

/**
 * Class NumericRangeCheck
 * @package StructureCheck\Check
 */
class NumericRangeCheck implements TypeInterface
{

    /**
     * @var TypeInterface
     */
    private $child;

    /**
     * NumericRangeCheck constructor.
     *
     * @param TypeInterface $child
     */
    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    /**
     * @param $argument1
     */
    public function check($argument1)
    {
        // TODO: write logic here
    }
}
