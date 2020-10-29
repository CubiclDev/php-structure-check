<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

interface TypeInterface
{
    /**
     * @param string $key
     * @param mixed $value
     * @return ResultInterface
     */
    public function check(string $key, $value): ResultInterface;
}
