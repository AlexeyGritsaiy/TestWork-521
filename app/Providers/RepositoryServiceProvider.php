<?php

namespace App\Providers;

use App\Repositories\CinemaRepository;
use App\Repositories\Interfaces\CinemaRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            CinemaRepositoryInterface::class,
            CinemaRepository::class
        );
    }

    public function boot()
    {
        //
    }
}
