<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

use Cubicl\StructureCheck\Type\TypeInterface;

interface CheckerInterface
{
    /**
     * @param mixed $element the element which should be tested
     * @param TypeInterface $requirement
     * @return ResultInterface
     */
    public function fulfills($element, TypeInterface $requirement): ResultInterface;
}
