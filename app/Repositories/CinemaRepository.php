<?php

namespace App\Repositories;

use App\Models\Cinema;
use App\Repositories\Interfaces\CinemaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CinemaRepository implements CinemaRepositoryInterface
{
    public function all(array $params = []): Collection
    {
        $query = Cinema::query()->with('movies');

        if ($id = $params['id'] ?? null) {
            $query->where('id', $id);
        }

        if ($name = $params['name'] ?? null) {
            $query->where('name', 'like', "%$name%");
        }

        if ($sort = $params['sortByName'] ?? null) {
            $query->orderBy('name', $sort);
        }

        if ($sort = $params['sortById'] ?? null) {
            $query->orderBy('id', $sort);
        }

        return $query->get();
    }
}
