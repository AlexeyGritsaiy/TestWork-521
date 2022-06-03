<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CinemaRepositoryInterface
{
    public function all(array $params = []): Collection;
}
