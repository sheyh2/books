<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
 *
 * @property Book   $relationBook
 */
class SubCategory extends Model{
    protected $table = 'sub_categories';

    // Override
    /**
     * @return Builder
     */
    public static function query(): Builder{
        return parent::query();
    }

    // Related
    /**
     * @return BelongsTo
     */
    public function relationBook(): BelongsTo{
        return $this->belongsTo(Book::class, 'sub_category_id', 'id');
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
