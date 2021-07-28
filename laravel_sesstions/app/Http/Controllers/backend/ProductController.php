<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // view list Product
    public function ProductView(){

     return view('backend.product.product_view');
    }

    // // add Product
    public function ProductStore(){

     return view('backend.product.product_store');
    }
    
    // return to Edit Product view page
    public function ProductEdit(){

        return view('backend.product.product_edit');
    }

     // Delete Product 
     public function ProductDelete(){

     return "Product deleted succusfuly";
     }

}
