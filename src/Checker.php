<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

use Cubicl\StructureCheck\Type\TypeInterface;

class Checker implements CheckerInterface
{
    /**
     * @inheritdoc
     */
    public function fulfills($element, TypeInterface $requirement): ResultInterface
    {
        return $requirement->check('', $element);
    }
}
