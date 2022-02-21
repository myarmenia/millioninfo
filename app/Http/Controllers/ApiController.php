<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Branche;
use App\Models\branches_temps;
use App\Models\Compni;

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
        $categorie = branches_temps::paginate(50);
        $stack = array();
        foreach($categorie as $empl){    
            $id = json_decode($empl->id, true);  
            $name = json_decode($empl->name, true);  
            $lat =json_decode($empl->lat , true);
            $image = json_decode($empl->image ,true);
            array_push($stack, array("id"=>$id,"name"=>$name,"lat"=>$lat,"image"=>$image));
        }

      return response()->json(['company' => $stack]);
    }

    public function show_single_company($id){
        $categorie = branches_temps::with('br_temps_Categoriesto')->find($id);

        if($categorie){
            $categorie = $categorie->only('id','name','address','apen_days','lat','lng','logo','phones','city','br_temps_Categoriesto');
        }

         return response()->json([$categorie]);
    }
}