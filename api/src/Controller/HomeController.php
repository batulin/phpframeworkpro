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
        return $this->render('home.html.twig', [
            "name" => $this->widget->name
        ]);
    }

}