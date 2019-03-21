<?php

namespace Cubicl\StructureCheck;

use Cubicl\StructureCheck\Type\TypeInterface;

/**
 * Class Checker
 * @package Cubicl\StructureCheck
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