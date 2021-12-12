<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Categories\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class CategoryController extends AbstractApiController
{
   const cacheKey = 'category@lang={key}';

    /**
     * @return JsonResponse
     */
    public function getCategories(): JsonResponse{
        $cacheKey = Str::replaceArray('key', [$this->lang], self::cacheKey);

        $data = Cache::get($cacheKey);
        if (is_null($data)){
            $data = (new Category())->getItems($this->lang);
//            Cache::put($cacheKey, $data, now()->addHours(3));
        }
        return self::renderJson(CategoryResource::collection($data), 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
