<?php

namespace App\Controller;

use App\Widget;
use Framework\Http\Response;

class HomeController
{
    public function __construct(private Widget $widget)
    {
    }

    public function index(): Response
    {
        $content = "<h1>controller{$this->widget->name}</h1>";
        return new Response($content);
    }

}