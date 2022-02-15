<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;

class CategoriesController extends Controller
{
    public function indexcategories(){
       $user = Categories::all();

         return view('categories', compact('user->id'));
    }


    // public function indexcategories()
    // {
    //     // $user = Categories::all();  
    //     // dd($user);
    //     // return view('categories',compact('user'));
    //     echo "hello";
        
    // }  
    public function edit()
    {
        $user = Categories::all();

        return view('categories.edit',compact('user'));
    }
}
      
   
