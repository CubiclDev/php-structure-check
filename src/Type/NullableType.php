<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class NullableType implements TypeInterface
{
    private TypeInterface $child;

    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    public function check($value): ResultInterface
    {
        if(is_null($value)) {
            return new Result(true);
        }

        return $this->child->check($value);
    }
}
