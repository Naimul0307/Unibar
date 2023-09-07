<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index()
    {
        return View('Admin.allorder');
    }

    public function PendingOrder()
    {
        return View('Admin.pendingorder');
    }
    
    public function CompleteOrder()
    {
        return View('Admin.completeorder');
    }
    public function CanceledOrder()
    {
        return View('Admin.canceledorder');
    }
}
