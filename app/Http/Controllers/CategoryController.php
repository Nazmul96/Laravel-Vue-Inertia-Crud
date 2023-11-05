<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return Inertia::render('categoryIndex',['data'=>$category]);
    }
}
