<?php

namespace Cubicl\StructureCheck;

/**
 * Class Result
 * @package Cubicl\StructureCheck
 */
class Result implements ResultInterface
{

    /**
     * @var bool
     */
    private $valid;

    /**
     * @var array
     */
    private $errors;

    /**
     * Result constructor.
     *
     * @param bool $valid
     * @param array $errors
     */
    public function __construct($valid, array $errors = [])
    {
        $this->valid = $valid;
        $this->errors = $errors;
    }

    /**
     * @inheritdoc
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * @inheritdoc
     */
    public function getErrors()
    {
        return $this->errors;
    }
}