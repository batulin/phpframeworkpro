<?php

return [
    ['POST', '/', [\App\Controller\HomeController::class, 'index']],
    ['GET', '/posts/{id:\d+}', [\App\Controller\PostController::class, 'show']],
    ['GET', '/hello/{name:.+}', function(string $name) {
        return new \Framework\Http\Response("hello $name");
    }],
];