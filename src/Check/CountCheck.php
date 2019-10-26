<?php

namespace Cubicl\StructureCheck\Check;

use Countable;
use Cubicl\StructureCheck\Error;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;
use Cubicl\StructureCheck\Type\TypeInterface;

class CountCheck implements TypeInterface
{
    /**
     * @var string
     */
    private static $countErrorMessage = 'The given countable %s has not the expected count %d.';

    /**
     * @var string
     */
    private static $countableErrorMessage = 'The given value %s is not a countable';

    /**
     * @var TypeInterface
     */
    private $child;

    /**
     * @var int
     */
    private $count;

    public function __construct(TypeInterface $child, int $count)
    {
        $this->child = $child;
        $this->count = $count;
    }

    public function check(string $key, $value): ResultInterface
    {
        $result = $this->child->check($key, $value);

        if (!$result->isValid()) {
            return $result;
        }

        if (!$value instanceof Countable) {
            return Result::invalid([
                new Error($key, sprintf(self::$countableErrorMessage, json_encode($value)))
            ]);
        }

        if (count($value) !== $this->count) {
            return Result::invalid([
                new Error($key, sprintf(self::$countErrorMessage, json_encode($value), $this->count))
            ]);
        }

        return Result::valid();
    }
}
