<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;

class SubCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();

        return view('category.sub_categories', compact('categories', 'subcategories'));
    }

    public function addSub()
    {
        dd(request()->all());

        SubCategory::create([

            'category_id' => request('category_id'),
            'name' => request('name')
        ]);

         return redirect('category.sub_category');
    }


}
