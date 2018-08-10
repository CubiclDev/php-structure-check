<?php

namespace StructureCheck\Type;

use StructureCheck\Result;
use StructureCheck\ResultInterface;

/**
 * Class RegexType
 * @package StructureCheck\Type
 */
class RegexType implements TypeInterface
{
    /**
     * @var string
     */
    private static $errorMessage = 'The value %s does not match the regex %s';

    /**
     * @var string
     */
    private $regex;

    /**
     * RegexType constructor.
     *
     * @param string $regex
     */
    public function __construct($regex)
    {
        $this->regex = $regex;
    }

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        $checkResult = is_string($value) && preg_match($this->regex, $value) === 1;

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value), $this->regex)] : []
        );
    }
}
