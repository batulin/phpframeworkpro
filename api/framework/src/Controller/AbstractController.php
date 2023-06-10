<?php

namespace Framework\Controller;

use Framework\Http\Request;
use Framework\Http\Response;
use Psr\Container\ContainerInterface;

abstract class AbstractController
{
    protected ?ContainerInterface $container = null;
    protected Request $request;

    public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;

    }
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    public function render(string $template, array $parametrs = [], Response $response = null): Response
    {
        $content = $this->container->get('twig')->render($template, $parametrs);

        $response ??= new Response();

        $response->setContent($content);

        return $response;
    }

}