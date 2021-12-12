<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends AbstractAdminController{
    protected $bookModel;

    public function __construct(Book $book){
        parent::__construct();
        $this->bookModel = $book->paginateList(10);
    }

    public function index(){
        $books = $this->bookModel;
        return view('admin.books.index', compact('books'));
    }

    public function create(){
        return view('admin.books.create');
    }
}
