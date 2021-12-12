<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends AbstractAdminController {
    protected $categoryModel;

    public function __construct(Category $category){
        parent::__construct();
        $this->categoryModel = $category;
    }

    public function index(){
        $categories = $this->categoryModel->paginateList(10);
        return view('admin.categories.index', compact('categories'));
    }
}
