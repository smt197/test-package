<?php

return [
    App\Providers\AppServiceProvider::class,
    Laravel\Mcp\Server\McpServiceProvider::class, // Ajoutez cette ligne
    Laravel\Boost\BoostServiceProvider::class, // Si nécessaire
];
