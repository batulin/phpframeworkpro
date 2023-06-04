<?php

namespace App\Controller;

use Framework\Http\Response;

class HomeController
{
    public function index(): Response
    {
        $content = '<h1>controller</h1>';
        return new Response($content);
    }

}