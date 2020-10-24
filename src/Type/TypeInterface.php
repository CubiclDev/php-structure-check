<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

interface TypeInterface
{
    /**
     * @param mixed $value
     */
    public function check(string $key, $value): ResultInterface;
}
