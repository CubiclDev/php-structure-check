<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

class Result implements ResultInterface
{

    /**
     * @var bool
     */
    private $valid;

    /**
     * @var ErrorInterface[]
     */
    private $errors;

    /**
     * Result constructor.
     *
     * @param bool $valid
     * @param ErrorInterface[] $errors
     */
    public function __construct($valid, array $errors)
    {
        $this->valid = $valid;
        $this->errors = $errors;
    }

    public static function valid(): ResultInterface
    {
        return new self(true, []);
    }

    /**
     * @param ErrorInterface[] $errors
     *
     * @return ResultInterface
     */
    public static function invalid(array $errors): ResultInterface
    {
        return new self(false, $errors);
    }

    /**
     * @inheritdoc
     */
    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * @inheritdoc
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
