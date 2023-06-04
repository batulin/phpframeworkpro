<?php

namespace Framework\Http;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{

    public function handle(Request $request): Response
    {
        //create dispatcher
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routeCollector->addRoute('GET', '/', function () {
                $content = '<h1>app</h1>';
                return new Response($content);
            });
            $routeCollector->addRoute('GET', '/posts/{id:\d+}', function ($routeParametrs) {
                $content = "<h1>this is post {$routeParametrs['id']}</h1>";
                return new Response($content);
            });
        });

        // Dispatch a URI, to obtain the route info
        $routeInfo = $dispatcher->dispatch(
            $request->server['REQUEST_METHOD'],
            $request->server['REQUEST_URI'],
        );

        [$status, $handler, $vars] = $routeInfo;

        // Call the handler, provided by the route info, in order to create a Response    }
        return $handler($vars);

    }
}