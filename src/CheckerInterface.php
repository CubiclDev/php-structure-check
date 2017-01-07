<?php

namespace StructureCheck;

use StructureCheck\Type\TypeInterface;

/**
 * Interface CheckerInterface
 * @package StructureCheck
 */
interface CheckerInterface
{

    /**
     * @param mixed $element the element which should be tested
     * @param TypeInterface $requirement
     *
     * @return ResultInterface
     */
    public function fulfills($element, TypeInterface $requirement);
}