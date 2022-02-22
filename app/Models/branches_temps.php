<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branches_temps extends Model
{
    use HasFactory;
    public $table ='branches_temp';

    protected $fillable = [
        'id',
        'company_id',
        'name',
        'address',
        'main',
        'region',
        'city',
        'postal_code',
        'lat',
        'lng',
        'open_days',
        'phones',
        'categories_id',
        'pay',
        'updated_at',
        'types_of_activities',
        'temp_field',
        'logo',
        'website_url'
    ];
   
    public function br_temps_categoriesto(){
        return $this->belongsTo(Categories::class ,'id');
    }

}
