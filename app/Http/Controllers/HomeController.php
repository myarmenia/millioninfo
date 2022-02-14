<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branche;
use App\Models\Status;
use App\Models\Compni;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

     

     $employees=Branche::where('types_of_activities','=', null)->skip(0)->take(10)->get();

     foreach($employees as $empl){

         $finde=Compni::where('id',$empl->company_id)->first();

         $employs=Branche::where('company_id',$finde->id)->update(['types_of_activities'=>$finde->types_of_activities]);
         
     }
    
         $employees=\DB::table('Branches')
         ->join('compnis', 'Branches.id','=','compnis.id')
         ->select('Branches.*', 'compnis.images')
         ->paginate(10);
    
         $status = Status::All();
         
         

        return view('home',compact('employees','status'));


 }
}
