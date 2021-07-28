<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    // view list Sales
    public function SalesView(){

     return view('backend.sales.sales_view');
    }

    // // add Sales
    public function SalesStore(){

     return view('backend.sales.sales_store');
    }
    
    // return to Edit Sales view page
    public function SalesEdit(){

        return view('backend.sales.sales_edit');
    }

     // Delete Sales 
     public function SalesDelete(){

     return "Sales deleted succusfuly";
     }
}
