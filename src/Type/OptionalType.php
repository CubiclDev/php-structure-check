<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

class OptionalType implements TypeInterface
{
    private $child;

    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    public function check(string $key, $value): ResultInterface
    {
        return $this->child->check($key, $value);
    }
}
