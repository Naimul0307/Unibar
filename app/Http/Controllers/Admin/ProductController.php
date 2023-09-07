<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index()
    {
        return View('Admin.allproduct');
    }
    public function AllProduct()
    {
        return View('Admin.addproduct');
    }
}
