<?php

namespace Framework\Console\Command;

interface CommandInterface
{
    public function execute(array $parameters = []): int;
}