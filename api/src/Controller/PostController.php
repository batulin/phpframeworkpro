<?php

namespace App\Controller;

use Framework\Http\Response;

class PostController
{
    public function show(int $id): Response
    {
        $content = "<h1>this is post {$id}</h1>";
        return new Response($content);
    }

}