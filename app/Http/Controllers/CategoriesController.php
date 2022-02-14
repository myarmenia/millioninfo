<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;

class CategoriesController extends Controller
{
    public function indexcategories(){
       $data = Categories::with('subCategoriesto')->get();

         return view('categories', compact('data'));
    }


         
}
      
   
