<?php
/**
 * Analytics module routes main entry point.
 *
 * @var \Illuminate\Routing\Router $router
 */

use Modules\Analytics\Http\Controllers\AnalyticsController;

$router = app('router');

// Back-end routes.
$router->group([
    'middleware' => 'administrator',
    'prefix'     => 'administrator',
    'as'         => 'administrator.',
], function () use ($router) {
    $router->resource('analytics', AnalyticsController::class, [
        'only' => ['index'],
    ]);
});
