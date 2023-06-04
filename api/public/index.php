<?php
// this is front controlker
declare(strict_types=1);

use Framework\Http\Kernel;
use Framework\Http\Request;
use Framework\Http\Response;

define('BASE_PATH', dirname(__DIR__));

require_once __DIR__ . '/../vendor/autoload.php';

//request received
$request = Request::createFromGlobals();

//perform some logic
$kernel = new Kernel();
$response = $kernel->handle($request);

//send response (string of content)
$response->send();