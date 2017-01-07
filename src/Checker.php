<?php

namespace StructureCheck;

use StructureCheck\Type\TypeInterface;

/**
 * Class Checker
 * @package StructureCheck
 */
class Checker implements CheckerInterface
{

    /**
     * @inheritdoc
     */
    public function fulfills(array $argument1, TypeInterface $requirement)
    {
        return new Result(true, []);
    }

}