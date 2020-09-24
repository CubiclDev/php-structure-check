<?php

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class RegexType implements TypeInterface
{
    private static string $errorMessage = 'The value %s does not match the regex %s';

    private string $regex;

    public function __construct(string $regex)
    {
        $this->regex = $regex;
    }

    public function check($value): ResultInterface
    {
        $checkResult = is_string($value) && preg_match($this->regex, $value) === 1;

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value), $this->regex)] : []
        );
    }
}
