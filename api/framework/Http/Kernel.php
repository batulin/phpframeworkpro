<?php

namespace Framework\Http;

class Kernel
{

    public function handle(Request $request): Response
    {
        $content = '<h1>app</h1>';

        return new Response($content);
    }

}