<?php

namespace Cubicl\StructureCheck;

class Error implements ErrorInterface
{
    private $key;

    private $message;

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
