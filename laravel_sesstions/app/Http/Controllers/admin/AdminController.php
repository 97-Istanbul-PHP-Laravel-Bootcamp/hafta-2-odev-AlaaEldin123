<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){

     return view('admin.admin_master');
    }


    public function AdminLogin(){

    return view('admin.admin_login');

    }
}
