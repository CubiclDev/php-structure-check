<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

/**
 * Class OptionalType
 * @package Cubicl\Cubicl\StructureCheck\Type
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