<?php

namespace Framework\Console\Command;

class MigrateDatabase implements CommandInterface
{
    private string $name = 'database:migrations:migrate';

    public function execute(array $parameters = []): int
    {
        echo 'executing migration database ' . PHP_EOL;

        return 0;
    }
}