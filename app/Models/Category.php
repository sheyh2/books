<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Class Category
 * @package App\Models\Category
 *
 * @property int    $id
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property SubCategory  $relationSubCategory
 * @property CategoryText $relationCategoryText
 */
class Category extends Model{
    protected $table = 'categories';

    // Override
    /**
     * @return Builder
     */
    public static function query(): Builder{
        return parent::query();
    }

    // Related
    /**
     * @return HasMany
     */
    public function relationSubCategory(): HasMany{
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function relationCategoryText(): HasMany{
        return $this->hasMany(CategoryText::class, 'category_id', 'id');
    }

    // Actions
    public function store(array $data){
        try {
            $this->save();
            $data['category_id'] = $this->getId();
            return (new CategoryText())->store($data);
        }catch (\Exception $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Getters
    public function getItems(){
        return self::query()
            ->with(['relationSubCategory', 'relationCategoryText'])
            ->get();
    }

    public function getBothItem($id){
        return self::query()
            ->where('id', '=', $id)
            ->first();
    }

    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
