<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filter;
use App\Models\Branche;
use App\Models\Status;
use App\Models\Compni;

class FilterController extends Controller
{
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }
      public function index()
    {
       $filter = Filter::All();

        return view('filter',['filter'=>$filter]);
    }
      public function updatefiter(Request $request)
    {   
        $update = Status::where('id',$request['id'])->update(['filter'=>$request['value']]);
    }
     public function create(Request $request)
    {   
        $this->validate($request, [
            'en' => 'required',
            'hy' => 'required',
            'ru' => 'required',
        ]);
       $insert = Filter::create([
        'name'=>$request['en'],'filter'=>json_encode($request->only('en','hy','ru'))]);
   
        return  redirect()->back();
    }
    public function delete($id)
    {   
       
        $delete = Filter::where('id',$id)->delete();

      return  redirect()->back();
    }
    public function filterme()
    {   
     return response()->json(['data' =>'test']);
    }
     public function filtername($name)
    {  
       $data=Branche::where('name', 'like', '%' . $name . '%')->orwhere('address','like', '%' . $name . '%')->get();
       $stack = array();
       $filter = array();
       $name=array();
       foreach( $data as  $dat){
        array_push($stack,  $dat->catigory);
       }
       $result = array_unique($stack);
       $catigory=Status::whereIn('id',$result)->get();
       foreach( $catigory as  $data){
          
        array_push($filter,  $data->filter);
       }
       $filters=Status::whereIn('filter',$filter)->get();
       foreach($filters as  $data){
          
        array_push($name,  $data->name);
       }
    
      return response()->json(['data' =>$name]);
    }
}
