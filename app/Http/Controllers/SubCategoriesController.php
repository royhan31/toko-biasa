<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        // $categories = Category::all();
        // $subcategories = SubCategory::all();

        $data = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->select('categories.*', 'sub_categories.name as sub_name')->get();

        return view('category.sub_categories', compact('data'));
    }

    public function addSub(Request $request)
    {
        SubCategory::create([
            'category_id' => $request->category,
            'name' => $request->name
        ]);

         return redirect()->back();
    }


}
