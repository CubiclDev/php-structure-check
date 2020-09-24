<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

interface TypeInterface
{
    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value): ResultInterface;
}
