<?php

namespace StructureCheck\Type;

use StructureCheck\ResultInterface;

/**
 * Interface TypeInterface
 * @package StructureCheck\Type
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