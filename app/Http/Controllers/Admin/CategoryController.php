<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use App\Models\CategoryText;
use App\Models\SubCategory;
use Illuminate\Http\RedirectResponse;

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
        ];
        
        if (Category::query()->where('id', '=', $categoryId)){
            if(CategoryText::query()->where('category_id', '=', $categoryId)->where('lang', '=', $data['lang'])->exists()){
                return redirect()->back()->with('error', 'Этот язык уже добавлен!');
            }
            $data = array_merge($data, ['category_id' => $categoryId]);
            $response = (new CategoryText())->store($data);
        }
        else{
            $response = $this->categoryModel->store($data);
        }
        return $response
            ? redirect()->back()->with('success', 'Успешно')
            : redirect()->back()->with('error', 'Не успешно');
    }

    public function edit($id){
        $category = $this->categoryModel->getBothItem($id);
        return view('admin.categories.edit', compact('category'));
    }
}
