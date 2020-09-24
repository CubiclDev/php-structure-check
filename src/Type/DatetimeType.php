<?php

namespace Cubicl\StructureCheck\Type;

use DateTime;
use DateTimeZone;
use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\ResultInterface;
use JsonException;

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

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     * @throws JsonException
     */
    public function check($value): ResultInterface
    {
        $checkResult = is_string($value) && $this->isValidDatetime($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value, JSON_THROW_ON_ERROR))] : []
        );
    }

    private function isValidDatetime(string $value): bool
    {
        $date = DateTime::createFromFormat($this->datetimeFormat, $value, new DateTimeZone($this->datetimeZone));
        $errors = DateTime::getLastErrors();

        return $date && $errors["warning_count"] === 0 && $errors["error_count"] === 0;
    }
}
