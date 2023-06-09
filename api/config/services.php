<?php

$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(BASE_PATH . '/.env');

$container = new League\Container\Container();

$container->delegate(new League\Container\ReflectionContainer(true));

# parameters for application config
$routes = include BASE_PATH . '/routes/web.php';

$appEnv = $_SERVER['APP_ENV'];

$templatePath = BASE_PATH . '/templates';

$container->add('APP_ENV', new \League\Container\Argument\Literal\StringArgument($appEnv));

$databaseUrl = 'sqlite:///' . BASE_PATH . '/var/db.sqlite';

$container->add(
    'base-commands-namespace',
    new \League\Container\Argument\Literal\StringArgument('Framework\\Console\\Command\\')
);
# services

$container->add(\Framework\Routing\RouterInterface::class, \Framework\Routing\Router::class);

$container->extend(\Framework\Routing\RouterInterface::class)
    ->addMethodCall(
        'setRoutes',
        [new \League\Container\Argument\Literal\ArrayArgument($routes)
    ]);

$container->add(\Framework\Http\Kernel::class)
    ->addArgument(\Framework\Routing\RouterInterface::class)
    ->addArgument($container);

$container->add(\Framework\Console\Application::class)
    ->addArgument($container);

$container->add(\Framework\Console\Kernel::class)
    ->addArguments([$container, \Framework\Console\Application::class]);

$container->addShared('filesystem-loader', \Twig\Loader\FilesystemLoader::class)
    ->addArgument(new \League\Container\Argument\Literal\StringArgument($templatePath));

$container->addShared('twig', \Twig\Environment::class)
    ->addArgument('filesystem-loader');

$container->add(\Framework\Controller\AbstractController::class);

$container->inflector(\Framework\Controller\AbstractController::class)
    ->invokeMethod('setContainer', [$container]);

$container->add(\Framework\Dbal\ConnectionFactory::class)
    ->addArgument(new \League\Container\Argument\Literal\StringArgument($databaseUrl));

$container->addShared(\Doctrine\DBAL\Connection::class, function () use ($container): \Doctrine\DBAL\Connection {
    return $container->get(\Framework\Dbal\ConnectionFactory::class)->create();
});

return $container;