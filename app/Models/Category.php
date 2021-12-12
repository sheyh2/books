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
 * @property string $lang
 * @property string $title
 *
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property Carbon $updated_at
 *
 * @property SubCategory $relationSubCategory
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

    public function getItems($lang){
        return self::query()
            ->where('lang', '=', $lang)
            ->with(['relationSubCategory'])
            ->get();
    }

    /**
     * @param int $paginate
     * @return LengthAwarePaginator
     */
    public function paginateList(int $paginate): LengthAwarePaginator{
        return self::query()
            ->paginate($paginate);
    }

    // Getters
    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLang(): string{
        return $this->lang;
    }

    /**
     * @return string
     */
    public function getTitle(): string{
        return $this->title;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
