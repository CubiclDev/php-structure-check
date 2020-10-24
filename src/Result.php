<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

class Result implements ResultInterface
{
    private bool $valid;

    /**
     * @var array<ErrorInterface>
     */
    private array $errors;

    /**
     * @param array<ErrorInterface> $errors
     */
    public function __construct(bool $valid, array $errors)
    {
        $this->valid = $valid;
        $this->errors = $errors;
    }

    public static function valid(): ResultInterface
    {
        return new self(true, []);
    }

    /**
     * @param array<ErrorInterface> $errors
     */
    public static function invalid(array $errors): ResultInterface
    {
        return new self(false, $errors);
    }

    public function isValid(): bool
    {
        return $this->valid;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
