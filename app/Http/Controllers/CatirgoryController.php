<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branche;
use App\Models\Compni;
use App\Models\Status;
use Validator,Redirect,Response;

class CatirgoryController extends Controller
{
    public function update(Request $request)
    {   $catigory = Status::where('name',$request->value)->first();
        $upadte=Branche::where('id',$request->id)->update(['catigory'=>$catigory->id]);
        echo "good";}
    public function find(Request $request)
    {   $id=$request['search'];
        return Redirect::to("find/$id");}
    public function findone($id)
    {   $stack = array();
        $finde=Branche::where('types_of_activities', 'like', '%'.$id.'%')->get();
        foreach ($finde as  $data){
            array_push($stack, $data->id);}
         $employees=Branche::whereIn('id',$stack)->paginate(10); 
         $status = Status::All();
        return view('home',compact('employees','status')); }
    
    public function category($name)
    {   $stack = array();
        $finde=Status::where('name', $name)->get();
          foreach ($finde as  $data){
            array_push($stack, $data->id);
        }
        $employees=Branche::whereIn('id',$stack)->paginate(50); 
           return response()->json(['company' => $employees,]);}
     public function company()
    {            $employees=Branche::paginate(50); 
   return response()->json(['company' => $employees,]);
   }
     public function search($name)
    {           
        
        $employees=Branche::where('name', 'like', '%'.$name.'%')->paginate(50); 
        $countnames=Branche::where('name', 'like', '%'.$name.'%')->count(); 
    

     $stack = array();
      foreach($employees as $empl){
            
           
     $id = json_decode($empl->id, true);  
     $name = json_decode($empl->name, true);  
     $address = json_decode($empl->address, true);  
     $region = json_decode($empl->region, true);  
     $city = json_decode($empl->city, true);  
     $lat = json_decode($empl->lat, true);  
     $lng = json_decode($empl->lng, true);  
     $phones = json_decode($empl->phones, true);  
    //  $name = json_decode($empl->name, true);  
    //  $name = json_decode($empl->name, true);  
    //  $name = json_decode($empl->name, true);  
     
//      [id] => 8191
// [company_id] => 1315
// [name] => {"en": "\"Aquatek\" hotel", "hy": "«Ակվատեկ» հյուրանոց", "ru": "Гостиница \"Акватек\""}
// [address] => {"en": "Myasnikyan Ave.40/2 Building", "hy": "Մյասնիկյան պող.40/2 շենք", "ru": "Мясникян пр.40/2 дом"}
// [main] => 1
// [region] => {"en": "(Nor Nork adm. district)", "hy": "(Նոր Նորք վարչ. շրջան)", "ru": "(Нор Норк адм. район)"}
// [city] => {"en": "Yerevan", "hy": "Երևան", "ru": "Ереван"}
// [postal_code] => 0025
// [lat] => 40.205726
// [lng] => 44.559422
// [open_days] => 999
// [phones] => {"en": "• +374-10-588888", "hy": "• +374-10-588888", "ru": "• +374-10-588888"}
// [phones2] =>
// [catigory] => 10
// [pay] =>
// [updated_at] => 2021-07-31 16:28:33
      array_push($stack, array("id"=>$id,"name"=>$name["en"],"address"=>$address["en"],"region"=>$region["en"],"city"=>$city["en"],"lat"=>$lat,"lng"=>$lng,"phones"=>$phones["en"],));
          
      }
     
    
  return response()->json(['company' => $stack,"total"=>$countnames]);
   }
    
    // search
}
