<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('category_detail', [
            'title' => "Category: " . $category->name,
            'category_name' => $category->name,
            'posts' => $category->posts->load(['writer', 'category']) // Load relasi
        ]);
    }
}