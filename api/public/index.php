<?php
// this is front controlker
declare(strict_types=1);

use Framework\Http\Kernel;
use Framework\Http\Request;
use Framework\Routing\Router;

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

$container = require BASE_PATH . '/config/services.php';

//request received
$request = Request::createFromGlobals();

//perform some logic
$kernel = $container->get(Kernel::class);
$response = $kernel->handle($request);

//send response (string of content)
$response->send();