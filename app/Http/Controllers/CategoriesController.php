<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;


class CategoriesController extends Controller
{
    public function indexcategories(){
       $categories = Categories::all();

         return view('categories', compact('categories'));
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
        $Categoriesedit = Categories::all();
        // $user = Categories::find($id);
        return view('categories.edit', $Categoriesedit);
    }
    
    public function createshow(){

        $user = Categories::all();
          return view('categories.create', compact('user'));
    }
     public function show($id){
       $info = Categorie::find($id);
       return view('showedit' , compact('info'));
    }
    public function createCategories(Request $request)
    {   
        $this->validate($request, [
            'en' => 'required',
            'hy' => 'required',
            'ru' => 'required',
        ]);


        $catigory= json_encode($request->only('en','hy','ru'),JSON_UNESCAPED_UNICODE);

      
        $insert = Categories::create([
            'name'=>$catigory,
        ]);
   
        return  redirect()->back();
    }
    public function Categoriesapi()
    {
       $categoriesapi = Categories::get()->pluck('name');
       return $categoriesapi;
    }
}
      
   
