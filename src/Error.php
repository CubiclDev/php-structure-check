<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck;

class Error implements ErrorInterface
{
    private string $key;

    private string $message;

    public function __construct(string $key, string $message)
    {
        $this->key = $key;
        $this->message = $message;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
