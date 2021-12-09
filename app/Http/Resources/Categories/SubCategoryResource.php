<?php

namespace App\Http\Resources\Categories;

use App\Models\SubCategory;
use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /** @var SubCategory $subCategory */
        $subCategory = $this;
        return [
            'id' => $subCategory->getId(),
            'title' => $subCategory->getTitle()
        ];
    }
}
