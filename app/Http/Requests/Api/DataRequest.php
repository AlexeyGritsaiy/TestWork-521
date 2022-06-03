<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\Concerns\ApiRequest;

class DataRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'id'           => 'nullable|int',
            'name'         => 'nullable|string',
            'sortByName'   => 'nullable|string|in:asc,desc',
            'sortById'     => 'nullable|string|in:asc,desc',
        ];
    }
}
