<?php

namespace App\Controller;

use Framework\Controller\AbstractController;
use Framework\Http\Response;

class PostController extends AbstractController
{
    public function show(int $id): Response
    {
        return $this->render('post.html.twig', [
            "postId" => $id
        ]);
    }

    public function create(): Response
    {
        return $this->render('create-post.html.twig');
    }

}