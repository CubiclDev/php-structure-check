<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Error;
use DateTime;
use DateTimeZone;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;

class DatetimeType implements TypeInterface
{
    private static string $errorMessage = 'The value %s is not a valid datetime.';

    private string $datetimeFormat;

    private string $datetimeZone;

    public function __construct(string $format, string $datetimeZone)
    {
        $this->datetimeFormat = $format;
        $this->datetimeZone = $datetimeZone;
    }

    public function check(string $key, $value): ResultInterface
    {
        $checkResult = is_string($value) && $this->isValidDatetime($value);

        return $checkResult
            ? Result::valid()
            : Result::invalid([new Error($key, sprintf(self::$errorMessage, json_encode($value)))]);
    }

    private function isValidDatetime(string $value): bool
    {
        $date = DateTime::createFromFormat($this->datetimeFormat, $value, new DateTimeZone($this->datetimeZone));
        $errors = DateTime::getLastErrors();

        return $date && !$errors;
    }
}
