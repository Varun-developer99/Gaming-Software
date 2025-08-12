<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role_as == 'Admin')
        {
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return redirect()->route('customer.dashboard');
        }
    }
}
