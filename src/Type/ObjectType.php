<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class ObjectType implements TypeInterface
{
    private static string $missingKeyErrorMessage = 'The key "%s" does not exists';

    /** @var TypeInterface[] */
    private array $children;

    /**
     * @param TypeInterface[] $children
     */
    public function __construct(array $children)
    {
        $this->children = $children;
    }

    public function check(string $key, $value): ResultInterface
    {
        $errors = [];
        $valid = true;

        foreach ($this->children as $objectProperty => $child) {
            $fullKey = sprintf('%s.%s', $key, $objectProperty);
            if (!array_key_exists($objectProperty, $value)) {
                if (!$child instanceof OptionalType) {
                    $valid = false;
                    $errors[] = new Error($fullKey, sprintf(self::$missingKeyErrorMessage, $objectProperty));
                }
                continue;
            }

            $result = $child->check($fullKey, $value[$objectProperty]);
            $valid = $valid && $result->isValid();
            $errors += $result->getErrors();
        }

        return new Result($valid, $errors);
    }
}
