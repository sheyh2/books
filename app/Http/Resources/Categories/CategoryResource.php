<?php

namespace App\Http\Resources\Categories;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /** @var Category $category */
        $category = $this;
        return [
            'id' => $category->getId(),
            'title' => $category->getTitle(),
            'sub_categories' => SubCategoryResource::collection($category->relationSubCategory)
        ];
    }
}
