<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class SubCategory
 * @package App\Models\SubCategory
 * 
 * @property int    $id
 * @property int    $category_id
 * @property string $title
 * 
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property Carbon $updated_at
 */
class SubCategory extends Model{
    protected $table = 'categories';

    // Override
    /**
     * @return Builder
     */
    public static function query(): Builder{
        return parent::query();
    }

    public function getItems($lang){
        self::query()
            ->where('lang', '=', $lang)
            ->get();
    }

    // Getters
    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }
    /**
     * @return int
     */
    public function getCategoryId(): int{
        return $this->category_id;
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

    /**
     * @return Carbon
     */
    public function getDeletedAt(): Carbon{
        return $this->deleted_at;
    }
}
