<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Book
 * @package App\Models\Book
 * 
 * @property int $id
 * @property int $sub_category_id
 * @property int $poster_id
 * @property int $like
 * @property int $dislike
 * @property int $publish_date
 * 
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Book extends Model{
    /**
     * @var string
     */
    protected $table = 'books';

    /**
     * @var array
     */
    protected $fillablel = [
        'sub_category_id',
        'poster_id',
        'like',
        'dislike',
        'publish_date'
    ];

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
    public function getSubCategoryId(): int{
        return $this->sub_category_id;
    }

    /**
     * @return int
     */
    public function getPosterId():int{
        return $this->poster_id;
    }

    /**
     * @return int
     */
    public function getLike(): int{
        return $this->like;
    }

    /**
     * @return int
     */
    public function getDislike(): int{
        return $this->dislike;
    }

    /**
     * @return int
     */
    public function getPublishDate(): int{
        return $this->publish_date;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
