<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
class UserController extends Controller
{
    public function CategoryPage($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('product_category_id',$id)->latest()->get();
        return view('User_template.category',compact('category','products'));
    }

    public function SingleProduct($id)
    {
        $product = Product::findOrfail($id);
        $subcat_id = Product::where('id',$id)->value('product_subcategory_id');
        $related_products = Product::where('product_subcategory_id',$subcat_id)->latest()->get();
        return view('User_template.singleproduct',compact('product','related_products'));
    }

    public function UserProfile()
    {
        return view('User_template.userprofile');
    }
    public function AddToCart()
    {
        return view('User_template.addtocart');
    }
    public function Checkout()
    {
        return view('User_template.checkout');
    }
    public function TodaysDeal()
    {
        return view('User_template.todaysdeal');
    }
    public function CustomerService()
    {
        return view('User_template.customerservice');
    }
    public function BestSellers()
    {
        return view('User_template.bestsellers');
    }
    public function GiftIdeas()
    {
        return view('User_template.giftideas');
    }
    public function NewReleases()
    {
        return view ('User_template.newreleases');
    }
}
