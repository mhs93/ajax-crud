<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $categories = Category::all();
    }
    
    public function store(Request $request)
    {
        $data = [
            ''
        ];
    }
}
