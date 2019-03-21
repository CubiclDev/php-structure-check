<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;

/**
 * Class NullableType
 * @package Cubicl\Cubicl\StructureCheck\Type
 */
class NullableType implements TypeInterface
{

    /**
     * @var TypeInterface
     */
    private $child;

    /**
     * NullableType constructor.
     *
     * @param TypeInterface $child
     */
    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    /**
     * @inheritdoc
     */
    public function check($value)
    {
        if(is_null($value)) {
            return new Result(true);
        }

        return $this->child->check($value);
    }
}