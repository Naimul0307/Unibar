<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index()
    {
        $products = Product::latest()->get();
        return View('Admin.allproduct',Compact('products'));
    }
    public function AddProduct()
    {
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return View('Admin.addproduct' ,compact('categories','subcategories'));
    }

    public function StoreProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
            'product_category_id' => 'required',
            'product_subcategory_id' => 'required',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $image = $request->file('product_img');
        $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        $category_id = $request->product_category_id;
        $category_name = Category::where('id',$category_id)->value('category_name');
        $subcategory_id = $request->product_subcategory_id;
        $subcategory_name = Subcategory::where('id',$subcategory_id)->value('subcategory_name');

        Product::insert([
            'product_name' => $request -> product_name,
            'price' => $request -> price,
            'quantity' => $request -> quantity,
            'product_short_des'=> $request -> product_short_des,
            'product_long_des'=> $request -> product_long_des,
            'product_category_name'=> $category_name,
            'product_subcategory_name'=> $subcategory_name,
            'product_category_id'=> $request -> product_category_id,
            'product_subcategory_id'=> $request -> product_subcategory_id,
            'product_img'=> $img_url,
            'slug' => strtolower(str_replace(' ','-',$request->product_name	)),
        ]);

        Category::where('id',$category_id)->increment('product_count',1);
        Subcategory::where('id',$subcategory_id)->increment('product_count',1);

        return redirect() -> route('allproduct') ->with('message','Product Add Successfully!');
    }

    public function EditProduct($id)
    {
        $product_info = Product::findOrFail($id);

        return view('admin.editproduct' , compact('product_info'));
    }

    public function EditProductImg($id)
    {
        $product_info = Product::findOrFail($id);

        return view('admin.editproductimg' , compact('product_info'));
    }

    public function UpdateProduct(Request $request)
    {

        $prodcut_id = $request->id;
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',

        ]);

        Product::findOrFail($prodcut_id)->update([
            'product_name' => $request -> product_name,
            'price' => $request -> price,
            'quantity' => $request -> quantity,
            'product_short_des'=> $request -> product_short_des,
            'product_long_des'=> $request -> product_long_des,
            'slug' => strtolower(str_replace(' ','-',$request->product_name	)),
        ]);

        return redirect() -> route('allproduct') ->with('message','Product Information Update Successfully!');
    }

    public function UpdateProductImg(Request $request)
    {
        $request->validate([
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $id = $request->id;
        $image = $request->file('product_img');
        $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        Product::findOrFail($id)->update([
            'product_img'=> $img_url,
        ]);

        return redirect() -> route('allproduct') ->with('message','Product Image Update Successfully!');
    }

    public function DeleteProduct($id)
    {
        $cat_id = Product::where('id',$id)->value('product_category_id');
        $subcat_id = Product::where('id',$id)->value('product_subcategory_id');
        Product::findOrFail($id)->delete();
        Category::where('id',$cat_id)->decrement('product_count',1);
        subcategory::where('id',$subcat_id)->decrement('product_count',1);
        return redirect() -> route('allproduct') ->with('message','Product Delete Successfully!');
    }
}
