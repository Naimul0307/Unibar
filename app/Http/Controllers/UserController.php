<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class UserController extends Controller
{
    public function CategoryPage($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('product_category_id',$id)->latest()->get();
        return view('User_template.category',compact('category','products'));
    }
}
