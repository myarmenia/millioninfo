<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Filter;

class StatusController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $status = Status::All();
        $filter = Filter::All();
        return view('status.index',['status'=>$status,'filter'=>$filter]);
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
