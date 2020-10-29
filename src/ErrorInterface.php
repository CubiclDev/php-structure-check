<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

interface ErrorInterface
{
    /**
     * @return string
     */
    public function getKey(): string;

    /**
     * @return string
     */
    public function getMessage(): string;
}
