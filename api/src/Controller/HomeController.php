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
        $template = "<h1>controller{{ name }}</h1>";
        return $this->render($template, [
            'name' => $this->widget->name
        ]);
    }

}