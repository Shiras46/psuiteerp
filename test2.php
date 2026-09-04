<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$request = Illuminate\Http\Request::create('/', 'GET');
$response = $kernel->handle($request);
echo 'STATUS: ' . $response->getStatusCode() . "\n";
if ($response->getStatusCode() !== 200) {
    if (method_exists($response, 'exception') && $response->exception) {
        echo 'EXCEPTION: ' . $response->exception->getMessage();
    }
}
