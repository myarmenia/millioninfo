<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use DOMDocument;

class catigorysController extends Controller
{
    public function index(){

       $data = Categorie::get('name');
       
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
