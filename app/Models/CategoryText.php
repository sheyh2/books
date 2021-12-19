<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryText
 * @package App\Models\CategoryText
 *
 * @property int    $id
 * @property int    $category_id
 * @property string $lang
 * @property string $name
 */
class CategoryText extends Model
{
    // Actions
    /**
     * @param array $data
     * @return bool|\Illuminate\Http\RedirectResponse
     */
    public function store(array $data){
        try {
            return self::query()
                ->insert($data);
        }catch (\Exception $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Getters
    /**
     * @return int
     */
    public function getid(): int{
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
    public function getName(): string{
        return $this->name;
    }
}
