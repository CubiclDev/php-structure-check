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

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
