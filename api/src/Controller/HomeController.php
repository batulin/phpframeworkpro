<?php

namespace App\Controller;

use App\Widget;
use Framework\Controller\AbstractController;
use Framework\Http\Response;
use Twig\Environment;

class HomeController extends AbstractController
{
    public function __construct(private Widget $widget)
    {
    }

    public function index(): Response
    {
        dd($this->container->get('twig'));
        $content = "<h1>controller{$this->widget->name}</h1>";
        return new Response($content);
    }

}