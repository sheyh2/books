<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

/**
 * Class BookText
 * @package App\Models\BookText
 *
 * @property int    $id
 * @property int    $book_id
 * @property string $lang
 * @property string $title
 * @property string $author
 * @property string $description
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class BookText extends Model{
    // Action

    // Override
    /**
     * @return Builder
     */
    public static function query(): Builder{
        return parent::query();
    }

    // Related
    public function relationBook(){
        $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function getItems(string $lang, $paginate){
        return self::query()
            ->where('lang', '=', $lang);
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
    public function getBookId(): int{
        return $this->book_id;
    }

    /**
     * @return string
     */
    public function getLang():string{
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return string
     */
    public function getTitle(string $lang): string{
        return $this->getByLocale($lang, $this->getId(), 'title');
    }

    /**
     * @param string $lang
     * @return string
     */
    public function getAuthor(string $lang): string{
        return $this->getByLocale();
    }

    /**
     * @return string
     */
    public function getDescription(): string{
        return $this->description;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
