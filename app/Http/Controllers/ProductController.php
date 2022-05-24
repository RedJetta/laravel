<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function getAll(){
       $catalog = Category::all();
       $product_name_category = Product::where('category_id', NULL)->get();
       return view('products', compact('catalog', 'product_name_category'));
    }
}
