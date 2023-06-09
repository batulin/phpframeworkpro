<?php

namespace Framework\Controller;

use Framework\Http\Response;
use Psr\Container\ContainerInterface;

abstract class AbstractController
{
    protected ?ContainerInterface $container = null;

    public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;

    }

    public function render(string $template, array $parametrs = [], Response $response = null): Response
    {
        $content = $this->container->get('twig')->render($template, $parametrs);

        $response ??= new Response();

        $response->setContent($content);

        return $response;
    }

}