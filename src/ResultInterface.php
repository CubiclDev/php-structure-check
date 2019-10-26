<?php

namespace Cubicl\StructureCheck;

/**
 *
 * @package Cubicl\StructureCheck
 */
interface ResultInterface
{
    /**
     * Returns TRUE if the check was successful.
     */
    public function isValid(): bool;

    /**
     * Returns a list of errors. If no error occurred, it will return an empty array.
     *
     * @return ErrorInterface[]
     */
    public function getErrors(): array;
}
