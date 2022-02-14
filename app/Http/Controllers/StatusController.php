<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Categorie;

class StatusController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {  
        $data = Categories::all();
        return view('status.index',compact('data'));
    }
     public function create(Request $request)
    {   
        $this->validate($request, [
            'en' => 'required',
            'hy' => 'required',
            'ru' => 'required',
        ]);

        $catigory= json_encode($request->only('en','hy','ru'));
       
      echo  $insert = Status::create([
        'name'=>$request['en'],'catigory'=>$catigory]);
   
        return  redirect()->back();
    }
    public function delete($id)
    {   
        
        $delete = Status::where('id',$id)->delete();

      return  redirect()->back();
    }

    
}
