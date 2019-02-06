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

        return view('category.categories', compact('categories'));
    }

    public function addCategory()
    {
        Category::create([
            'name' => request('name')
        ]);

        return redirect('/category/categories');
    }

    public function editCategory($id)
    {
        $categories = Category::find($id);

        return view('categories', compact('categories'));
    }
}
