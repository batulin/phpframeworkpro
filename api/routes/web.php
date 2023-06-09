<?php

return [
    ['GET', '/', [\App\Controller\HomeController::class, 'index']],
    ['GET', '/posts/{id:\d+}', [\App\Controller\PostController::class, 'show']],
    ['GET', '/posts', [\App\Controller\PostController::class, 'create']],
    ['GET', '/hello/{name:.+}', function(string $name) {
        return new \Framework\Http\Response("hello $name");
    }],
];