<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;

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

    public function create(){
        return view('admin.categories.create');
    }

    public function store(CategoryStoreRequest $request){
        $data = [
            'title' => $request->input('titleRu'),
            'lang'  => 'ru'
        ];
        $response = (new Category())->store($data);
        return $response
            ? redirect()->back()->with('success', 'Успешно')
            : redirect()->back()->with('error', 'Не успешно');
    }
}
