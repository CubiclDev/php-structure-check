<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class ListType implements TypeInterface
{
    private static string $isNotAnArrayMessage = 'The given value %s is not an array.';

    private TypeInterface $child;

    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    public function check($value): ResultInterface
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

            $valid = $valid && $result->isValid();
            $errors += $result->getErrors();
        }

        return new Result($valid, $errors);
    }
}
