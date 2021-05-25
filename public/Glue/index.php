<?php

use Spryker\Glue\GlueApplication\Bootstrap\GlueBootstrap;
use Spryker\Shared\Config\Application\Environment;
use Spryker\Shared\ErrorHandler\ErrorHandlerEnvironment;

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Anonymous-Customer-Unique-Id, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, Accept-Encoding');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PATCH, DELETE');
    header('Content-Type: text/plain');
    header('Content-Length: 0');
    http_response_code(204);
    exit(0);
}

define('APPLICATION', 'GLUE');
defined('APPLICATION_ROOT_DIR') || define('APPLICATION_ROOT_DIR', dirname(__DIR__, 2));

require_once APPLICATION_ROOT_DIR . '/vendor/autoload.php';

Environment::initialize();

$errorHandlerEnvironment = new ErrorHandlerEnvironment();
$errorHandlerEnvironment->initialize();

$bootstrap = new GlueBootstrap();
$bootstrap
    ->boot()
    ->run();
