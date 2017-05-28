<?php

namespace StructureCheck\Type;

use StructureCheck\ResultInterface;

/**
 * Class OptionalType
 * @package StructureCheck\Type
 * @author Christian Blank <christian@cubicl.de>
 */
class OptionalType implements TypeInterface
{
    /**
     * @var TypeInterface
     */
    private $child;

    /**
     * OptionalType constructor.
     * @param TypeInterface $child
     */
    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        return $this->child->check($value);
    }
}