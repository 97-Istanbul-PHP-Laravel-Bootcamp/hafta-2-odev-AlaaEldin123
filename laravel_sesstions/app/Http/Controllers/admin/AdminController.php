<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){

     return view('admin.admin_master');
    }

    // return to admin login page
    public function AdminLogin(){

    return view('admin.admin_login');

    }

    // admins table view page

    public function AdminView(){

        return view('admin.manageadmin.admin_view');
    }

    // return to add new admin view page

    public function admin_register (){

        return view('admin.manageadmin.admin_register');
    }

     // return to Edit admin view page
    public function adminEdit($id){

        return view('admin.manageadmin.adminEdit');
    }

     // Delete admin 
    public function adminDelete(){

    return "admin user deleted succusfuly";
    }

 
   

}
