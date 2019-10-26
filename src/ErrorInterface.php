<?php

namespace Cubicl\StructureCheck;

interface ErrorInterface
{
    public function getKey(): string;

    public function getMessage(): string;
}
