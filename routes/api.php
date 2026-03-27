<?php

use Laravel\Boost\Mcp\Boost;
use Laravel\Mcp\Facades\Mcp;
use Illuminate\Support\Facades\Route;

Mcp::web('/mcp', Boost::class);

Route::get('/debug-boost', function() {
    return [
        'env' => app()->environment(),
        'boost_config' => config('boost'),
        'generate_module_exists' => class_exists(\Laravel\Boost\Mcp\Tools\GenerateModule::class),
        'delete_module_exists' => class_exists(\Laravel\Boost\Mcp\Tools\DeleteModule::class),
        'application_info_exists' => class_exists(\Laravel\Boost\Mcp\Tools\ApplicationInfo::class),
    ];
});