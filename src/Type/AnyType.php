<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class AnyType implements TypeInterface
{
    public function check(string $key, $value): ResultInterface
    {
        return Result::valid();
    }
}
