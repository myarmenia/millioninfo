<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Branche;
use App\Models\branches_temps;

class ApiController extends Controller
{

    public function showapi($id){

        $apishow = SubCategories::where('categories_id', $id)->get();
         return $apishow;
    }

    public function Categoriesapi()
    {
       $categoriesapi = Categories::get()->pluck('name');
       return $categoriesapi;
    }

    public function category($types_of_activities){
        $categorie = branches_temps::where('name', 'like', '%'.$types_of_activities.'%')->get();
        
        $stack = array();
        foreach($categorie as $empl){    
            // $id = json_decode($empl->id, true);  
            $name = json_decode($empl->name, true);  
            array_push($stack, array("name"=>$name));
        }

      return response()->json(['company' => $stack]);
    }



    public function show_company_name($name){

        $categorie = branches_temps::where('name', 'like', '%'.$name.'%')->get();
    
        $stack = array();
        
        foreach($categorie as $empl){    
            $id = json_decode($empl->id, true);  
            $name = json_decode($empl->name, true);
            $let = json_decode($empl->lat, true);
            $lng = json_decode($empl->lat, true);
            $open_days =json_decode($empl->open_days , true);

            array_push($stack, array("id"=>$id,"name"=>$name ,"let"=>$let ,"lng"=>$lng ,"open_days"=>$open_days));
        }

      return response()->json(['company' => $stack]);
       
    }
}
