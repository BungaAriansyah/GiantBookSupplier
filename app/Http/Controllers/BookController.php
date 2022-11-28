<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::paginate(8);
        return view('book.index', compact('categories', 'books'));
    }

    public function detail($id)
    {
        $categories = Category::all();
        $book = Book::all();
        if (!isset($book)) return abort(404);

        return view('book.detail', compact('categories', 'book'));
    }

    public function contact()
    {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }
}
