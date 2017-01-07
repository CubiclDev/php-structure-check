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
     * @param array $tested
     * @param TypeInterface $requirement
     *
     * @return ResultInterface
     */
    public function fulfills(array $tested, TypeInterface $requirement);
}