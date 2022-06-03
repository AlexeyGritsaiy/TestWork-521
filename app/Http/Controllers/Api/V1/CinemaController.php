<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\DataRequest;
use App\Models\Cinema;
use App\Repositories\Interfaces\CinemaRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    private $cinemaRepository;

    public function __construct(CinemaRepositoryInterface $cinemaRepository)
    {
        $this->cinemaRepository = $cinemaRepository;
    }

    public function view(Cinema $cinema): JsonResponse
    {
        $cinema->load('movies');

        return new JsonResponse($cinema);
    }

    public function all(DataRequest $request): JsonResponse
    {
        $params = $request->validated();
        $cinemas = $this->cinemaRepository->all($params);

        return new JsonResponse($cinemas);
    }
}
