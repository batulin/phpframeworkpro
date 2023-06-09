<?php

namespace Framework\Http;

class Response
{
    public const HTTP_INTERNAL_SERVER_ERROR = 500;
    public function __construct(
        private ?string $content = '',
        private int $status = 200,
        private array $headers = []
    )
    {
    }

    public function send(): void
    {
        echo $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }
}