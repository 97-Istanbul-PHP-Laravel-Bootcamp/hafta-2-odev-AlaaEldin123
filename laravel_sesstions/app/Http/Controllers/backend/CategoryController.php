<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    // view list categories
    public function CategoryView(){

     return view('backend.category.category_view');
    }

    // add categories
    public function CategoryStore(){

     return view('backend.category.category_store');
    }
    
    // return to Edit Category view page
    public function CategoryEdit(){

        return view('backend.category.category_edit');
    }

     // Delete Category 
     public function CategoryDelete(){

     return "Category deleted succusfuly";
     }

}
