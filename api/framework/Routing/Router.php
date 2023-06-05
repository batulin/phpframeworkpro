<?php

namespace Framework\Routing;

use FastRoute\Dispatcher;
use Framework\Http\HttpException;
use Framework\Http\HttpRequestMethodException;
use Framework\Http\Request;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Router implements RouterInterface
{

    public function dispatch(Request $request): array
    {
        $routeInfo = $this->extractRouteInfo($request);

        [$handler, $vars] = $routeInfo;
        [$controller, $method] = $handler;

        return [[new $controller, $method], $vars];
    }

    private function extractRouteInfo(Request $request) {
        //create dispatcher
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routes = include BASE_PATH . '/routes/web.php';

            foreach ($routes as $route) {
                $routeCollector->addRoute(...$route);
            }
        });

        // Dispatch a URI, to obtain the route info
        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPathInfo(),
        );


        switch ($routeInfo[0]) {
            case Dispatcher::FOUND:
                return [$routeInfo[1], $routeInfo[2]];
            case Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = implode(', ', $routeInfo[1]);
                throw new HttpRequestMethodException("The allowed methods $allowedMethods");
            default:
                throw new HttpException("Not found");
        }
    }
}