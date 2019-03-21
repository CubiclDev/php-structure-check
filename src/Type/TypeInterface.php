<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

/**
 * Interface TypeInterface
 * @package Cubicl\Cubicl\StructureCheck\Type
 */
interface TypeInterface
{
    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value);
}