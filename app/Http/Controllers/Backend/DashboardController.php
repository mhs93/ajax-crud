<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use function Symfony\Component\Routing\Matcher\match;

class DashboardController extends Controller
{
    public function index(Request $request){
        $type = $request->type ?? 'category';
        $data = match($type){
            'category'      => $this->getCategory(),
            'sub_category'  => $this->getSubCategories(),
            'product'       => $this->getProducts(),
            'default'       => $this->getCategory(),
        };

        return view('dashboard',compact('data'));
    }

    public function getCategory()
    {
        $categories = Category::all();
        return ['categories' => $categories];
    }

    public function getSubCategories()
    {
        $sub_categories = SubCategory::all();
        return ['sub_categories' => $sub_categories];
    }

    public function getProducts()
    {
        $products = Product::all();

        return ['products' => $products];
    }
}
