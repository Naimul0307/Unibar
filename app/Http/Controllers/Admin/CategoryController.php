<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index()
    {
        return View('Admin.allcategory');
    }

    public function AddCategory()
    {
        return View('Admin.addcategory');
    }
}
