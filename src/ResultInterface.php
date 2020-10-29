<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

/**
 * @package Cubicl\StructureCheck
 */
interface ResultInterface
{
    /**
     * Returns TRUE if the check was successful.
     * @return bool
     */
    public function isValid(): bool;

    /**
     * Returns a list of errors. If no error occurred, it will return an empty array.
     *
     * @return array<ErrorInterface>
     */
    public function getErrors(): array;
}
