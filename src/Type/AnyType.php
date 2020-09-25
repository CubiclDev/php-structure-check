<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class AnyType implements TypeInterface
{
    /**
     * @inheritdoc
     */
    public function check(string $key, $value): ResultInterface
    {
        return Result::valid();
    }
}
