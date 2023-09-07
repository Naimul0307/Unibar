<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function Index()
    {
        return View('Admin.allsubcategory');
    }
    public function AddSubCategory()
    {
        return View('Admin.addsubcategory');
    }
}
