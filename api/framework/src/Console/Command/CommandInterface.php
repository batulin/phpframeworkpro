<?php

namespace Framework\Console\Command;

interface CommandInterface
{
    public function exexute(array $parameters = []): int;
}