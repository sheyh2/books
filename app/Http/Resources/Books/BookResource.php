<?php

namespace App\Http\Resources\Books;

use App\Models\Book;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;

class BookResource extends ResourceCollection
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
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
            'data' => $this->collection->transform(function (Book $book) {
                return [
                    'id' => $book->getId(),
                    'rating' => $book->getRating()
                ];
            }),
        ];
    }
}
