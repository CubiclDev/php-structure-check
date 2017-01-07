<?php

namespace StructureCheck\Type;

use StructureCheck\Result;

/**
 * Class AnyType
 * @package StructureCheck\Type
 */
class AnyType implements TypeInterface
{
    /**
     * @inheritdoc
     */
    public function check($value)
    {
        return new Result(true, []);
    }
}