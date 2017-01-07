<?php

namespace StructureCheck\Type;

use StructureCheck\Result;

/**
 * Class ListType
 * @package StructureCheck\Type
 */
class ListType implements TypeInterface
{
    private static $isNotAnArrayMessage = 'The given value %s is not an array.';

    /**
     * @var TypeInterface[]
     */
    private $child;

    /**
     * ListType constructor.
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
        if (!is_array($value)) {
            return new Result(
                false,
                [sprintf(self::$isNotAnArrayMessage, json_encode($value))]
            );
        }

        $errors = [];
        $valid = true;

        foreach ($value as $item) {
            $result = $this->child->check($item);

            $valid &= $result->isValid();
            $errors += $result->getErrors();
        }

        return new Result($valid, $errors);
    }
}
