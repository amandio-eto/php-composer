<?php 
require_once __DIR__ . '/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('AmandioPhpComposer');
$log->pushHandler(new StreamHandler('application.log',Logger::INFO));

json_encode($log->info("hello world"));
json_encode($log->info("Nice to Meet You"));