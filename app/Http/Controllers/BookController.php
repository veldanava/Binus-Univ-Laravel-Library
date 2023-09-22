<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Contracts\View\View;

class BookController extends Controller
{
    public function index():View{
        return view('book.index', ['books' => Book::all()]);
    }
}
