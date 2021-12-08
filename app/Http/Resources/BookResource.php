<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\LengthAwarePaginator;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /** @var LengthAwarePaginator $lengthAwarePaginator */
        $lengthAwarePaginator = $this->resource;
        return [
            'total' => $lengthAwarePaginator->total(),
            'perPage' => $lengthAwarePaginator->perPage(),
            'currentPage' => $lengthAwarePaginator->currentPage(),
            'lastPage' => $lengthAwarePaginator->lastPage(),
        ];
    }
}
