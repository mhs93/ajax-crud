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
    public function index(Request $request)
    {
        $type = $request->get('type', 'category');

        $data = [];

        switch ($type) {
            case 'category':
                $data['categories'] = $this->getCategory();
                break;
            case 'sub_category':
                $data['sub_categories'] = $this->getSubCategories();
                break;
            case 'product':
                $data['products'] = $this->getProducts();
                break;
        }
        return view('dashboard', array_merge($data, compact('type')));
    }

    public function getCategory()
    {
        return Category::all();
    }

    public function getSubCategories()
    {
        return SubCategory::all();
    }

    public function getProducts()
    {
        return Product::all();
    }
}
