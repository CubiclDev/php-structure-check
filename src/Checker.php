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
    public function fulfills($element, TypeInterface $requirement)
    {
        return $requirement->check($element);
    }

}