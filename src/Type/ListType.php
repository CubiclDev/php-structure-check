<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
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

    public function check(string $key, $value): ResultInterface
    {
        if (!is_array($value)) {
            return Result::invalid(
                [new Error($key, sprintf(self::$isNotAnArrayMessage, json_encode($value)))]
            );
        }

        $errors = [];
        $valid = true;

        foreach ($value as $idx => $item) {
            $result = $this->child->check(sprintf('%s.%d', $key, $idx), $item);

            $valid = $valid && $result->isValid();
            $errors += $result->getErrors();
        }

        return $valid
            ? Result::valid()
            : Result::invalid($errors);

    }
}
