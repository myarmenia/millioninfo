<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;
use DOMDocument;

class catigorysController extends Controller
{
    public function index(){

       $data = Categories::get('name');
       
       return $data;
    }


    public function show($id){
       $info = Categories::find($id);
       return view('showedit' , compact('info'));
    }


    public function show1(){
        
        $categories = Categories::all();

        return view('categories', compact('categories'));
     }
    public function edit(Request $req){
        
        $data = Categories::find($req->id);
        $data->id=$req->id;
        $data->name=$req->hello;
        $data->save();

        return  redirect()->back();
    
    }

   


     

}
