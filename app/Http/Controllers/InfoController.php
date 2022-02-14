<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branches_temps;
use DOMDocument;
use App\Models\Categorie;

class InfoController extends Controller
{
  public function index(){

    $lang = 'en';
    $arr = [];
    $big_arr=[];
    $n='';
       $data = branches_temps::get()->pluck('types_of_activities');

       foreach (json_decode($data , true) as $key => $value){

         $xml = json_decode($value, true);
         foreach( $xml as $k => $item){
           $x = json_decode($value, true)[$k];
           if($x){
            $dom = new DOMDocument;
            $dom->loadXML($x);
            $books = $dom->getElementsByTagName('a');
            libxml_use_internal_errors(true);
          
            foreach ($books as $key1 => $book) {
              if($book && $book->nodeValue){
                $b=$book->nodeValue;
               
              }else{
                // $b='';
              }
         
            }
        
          }
          $arr[$k]=$b;
         }
         $p=json_encode($arr, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

         Categorie::updateOrCreate(['name'=>$p],['name'=>$p]);
       
       }
  
  }



  
     
}
