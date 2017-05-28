<?php

namespace StructureCheck\Check;

use Countable;
use StructureCheck\Result;
use StructureCheck\Type\TypeInterface;

/**
 * Class CountCheck
 * @package StructureCheck\Check
 */
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

    /**
     * CountCheck constructor.
     *
     * @param TypeInterface $child
     * @param int $count
     */
    public function __construct(TypeInterface $child, $count)
    {
        $this->child = $child;
        $this->count = $count;
    }

    /**
     * @inheritdoc
     */
    public function check($value)
    {
        $result = $this->child->check($value);

        if (!$result->isValid()) {
            return $result;
        }

        if (!$value instanceof Countable) {
            return new Result(
                false,
                [sprintf(self::$countableErrorMessage, json_encode($value))]
            );
        }

        if (count($value) !== $this->count) {
            return new Result(
                false,
                [sprintf(self::$countErrorMessage, json_encode($value), $this->count)]
            );
        }

        return new Result(true);
    }
}
