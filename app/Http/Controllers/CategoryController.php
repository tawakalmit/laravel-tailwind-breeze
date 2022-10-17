<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Home;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($category_id)
    {
        $desired_category = Home::where('category_id', $category_id)->get();
        $category_name = Category::where('id', $category_id)->get();
        return view('category', compact('desired_category', 'category_name'));
    }
}
