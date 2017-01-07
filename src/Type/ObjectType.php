<?php

namespace StructureCheck\Type;

use StructureCheck\Result;

class ObjectType implements TypeInterface
{
    private static $missingKeyErrorMessage = 'The key "%s" does not exists';

    /**
     * @var TypeInterface[]
     */
    private $children;

    /**
     * ObjectType constructor.
     *
     * @param TypeInterface[] $children
     */
    public function __construct(array $children)
    {
        $this->children = $children;
    }

    /**
     * @inheritdoc
     */
    public function check($value)
    {
        $errors = [];
        $valid = true;

        foreach ($this->children as $key => $child) {
            if (!array_key_exists($key, $value)) {
                $valid = false;
                $errors[] = sprintf(self::$missingKeyErrorMessage, $key);

                continue;
            }

            $result = $child->check($value[$key]);
            $valid = $valid && $result->isValid();
            $errors += $result->getErrors();
        }

        return new Result($valid, $errors);
    }
}
