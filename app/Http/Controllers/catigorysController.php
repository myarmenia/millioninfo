<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use DOMDocument;

class catigorysController extends Controller
{
    public function index(){

       $data = Categorie::get('name');
       
       return $data;
    }


    public function show($id){
       $info = Categorie::find($id);
       return view('showedit' , compact('info'));
    }

    public function edit(Request $req){
        $data = Categorie::find($req->id);
        $data->name=$req->hello;
        $data->save();
        return view('showedit');
    
    }
}
