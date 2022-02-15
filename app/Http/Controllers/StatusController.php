<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Categorie;
use App\Models\Categories;
use App\Models\SubCategories;

class StatusController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {  
        
        $data = Categories::all();
        $data2 = SubCategories::all();

        return view('status.index',compact('data','data2'));
    }




     public function create(Request $request)
    {   
        $this->validate($request, [
            'en' => 'required',
            'hy' => 'required',
            'ru' => 'required',
        ]);

        $catigory= json_encode($request->only('en','hy','ru'));
      
       $insert = SubCategories::create([
        'categories_id'=>$request->categories_id,
        'name'=>$catigory,
    ]);
   
        return  redirect()->back();
    }

    
    public function delete($id)
    {   
        
        $delete = SubCategories::where('id',$id)->delete();

        return  redirect()->back();

       
    }

    public function indexedit(){

        return view('status.subedit');

        

    }

    
}
