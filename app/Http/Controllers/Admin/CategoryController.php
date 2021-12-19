<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends AbstractAdminController {
    protected $categoryModel;

    public function __construct(Category $category){
        parent::__construct();
        $this->categoryModel = $category;
    }

    public function index(){
        $categories = $this->categoryModel->getItems();
        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    /**
     * @param CategoryFormRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryFormRequest $request): RedirectResponse{
        $categoryId = (int)$request->input('id');
        $data = [
            'name' => $request->input('name'),
            'lang'  => $request->input('lang'),
            'category_id' => null,
        ];
        $response = (new Category())->store($data, $categoryId);
        return $response
            ? redirect()->back()->with('success', 'Успешно')
            : redirect()->back()->with('error', 'Не успешно');
    }

    public function edit($id){
        $category = $this->categoryModel->getBothItem($id);
        return view('admin.categories.edit', compact('category'));
    }
}
