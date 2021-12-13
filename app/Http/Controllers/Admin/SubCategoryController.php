<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends AbstractAdminController{
    protected $subCategoryModel;

    public function __construct(SubCategory $subCategory)
    {
        parent::__construct();
        $this->subCategoryModel = $subCategory;
    }

    public function index(Request $request){
        $subCategories = $this->subCategoryModel->paginateList(10, (int)$request->input('category_id'));
        return view('admin.sub_categories.index', compact('subCategories'));
    }

    public function create(Request $request){
        return view('admin.sub_categories.create');
    }
}
