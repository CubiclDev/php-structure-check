<?php

declare(strict_types=1);

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

    public function check(string $key, $value): ResultInterface
    {
        if($value === null) {
            return Result::valid();
        }

        return $this->child->check($key, $value);
    }
}
