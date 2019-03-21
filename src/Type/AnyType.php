<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;

/**
 * Class AnyType
 * @package Cubicl\Cubicl\StructureCheck\Type
 */
class AnyType implements TypeInterface
{
    /**
     * @inheritdoc
     */
    public function check($value)
    {
        return new Result(true);
    }
}