<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

interface ErrorInterface
{
    public function getKey(): string;

    public function getMessage(): string;
}
