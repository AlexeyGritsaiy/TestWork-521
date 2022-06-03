<?php

use App\Http\Controllers\Api\V1\CinemaController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'cinema'], function (Router $router) {
    $router->get('/{cinema:id}', [CinemaController::class, 'view'])->name('view');
    $router->get('/', [CinemaController::class, 'all'])->name('list');
});
