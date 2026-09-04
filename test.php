<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
try {
    $c = \App\Models\HeroSlide::where('is_active', true)->orderBy('order')->count();
    echo 'SUCCESS: ' . $c;
} catch (\Exception $e) {
    echo 'FAILED: ' . $e->getMessage();
}
