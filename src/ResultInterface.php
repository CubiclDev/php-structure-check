<?php

namespace StructureCheck;

/**
 *
 * @package StructureCheck
 */
interface ResultInterface
{
    /**
     * Returns TRUE if the check was successful.
     *
     * @return bool
     */
    public function isValid();

    /**
     * Returns a list of errors. If no error occurred, it will return an empty array.
     *
     * @return array
     */
    public function getErrors();
}