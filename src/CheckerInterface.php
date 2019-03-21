<?php

namespace Cubicl\StructureCheck;

use Cubicl\StructureCheck\Type\TypeInterface;

/**
 * Interface CheckerInterface
 * @package Cubicl\StructureCheck
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