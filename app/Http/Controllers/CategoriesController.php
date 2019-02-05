<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();

        return view('categories', compact('categories'));
    }

    public function addCategory()
    {
        Category::create([
            'name' => request('name')
        ]);

        return redirect('/category');
    }

    public function getSub()
    {
        return view('sub_categories');
    }
}
