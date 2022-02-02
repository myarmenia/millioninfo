<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;
     protected $fillable = [
        'company_id','types_of_activities', 'name','address','main','region','city','postal_code','lat','lng','open_days','phones','catigory','pay'
    ];
}
