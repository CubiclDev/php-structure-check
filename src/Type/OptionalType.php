<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

class OptionalType implements TypeInterface
{
    private TypeInterface $child;

    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    public function check($value): ResultInterface
    {
        return $this->child->check($value);
    }
}
