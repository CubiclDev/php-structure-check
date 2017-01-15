<?php

namespace StructureCheck\Type;

use DateTime;
use DateTimeZone;
use StructureCheck\Result;
use StructureCheck\ResultInterface;

/**
 * Class DatetimeType
 * @package StructureCheck\Type
 */
class DatetimeType
{
    /**
     * @var string
     */
    private static $errorMessage = 'The value %s is not a valid datetime.';

    /**
     * @var string
     */
    private $datetimeFormat;

    /**
     * @var string
     */
    private $datetimeZone;

    /**
     * DatetimeType constructor.
     *
     * @param string $format
     * @param string $datetimeZone
     */
    public function __construct($format, $datetimeZone)
    {
        $this->datetimeFormat = $format;
        $this->datetimeZone = $datetimeZone;
    }

    /**
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function check($value)
    {
        $checkResult = is_string($value) && $this->isValidDatetime($value);

        return new Result(
            $checkResult,
            !$checkResult ? [sprintf(self::$errorMessage, json_encode($value))] : []
        );
    }

    /**
     * @param string $value
     *
     * @return bool
     */
    private function isValidDatetime($value) {
        $date = DateTime::createFromFormat($this->datetimeFormat, $value, new DateTimeZone($this->datetimeZone));
        $errors = DateTime::getLastErrors()["warning_count"];

        return $date && $errors["warning_count"] == 0 && $errors["error_count"] == 0;
    }
}
