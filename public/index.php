<?php
define('DS', DIRECTORY_SEPARATOR);
define('PROJECT_PATH', __DIR__ . DS . '..' . DS);
define('VENDOR_PATH', PROJECT_PATH . 'vendor' . DS );
define('CONFIG_PATH', PROJECT_PATH .  'config' . DS);
define('VAR_PATH', PROJECT_PATH . 'var' . DS);

require_once VENDOR_PATH . 'autoload.php';

$env = 'dev';
$debug = true;

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$kernel = new \App\Kernel($env, $debug);
$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
