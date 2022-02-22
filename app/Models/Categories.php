<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'status'
    ];

    public function subCategoriesto(){

        return $this->hasMany(SubCategories::class,'categories_id');
    }
    public function br_temps_Categories(){

        return $this->hasMany(branches_temps::class,'categories_id');
    }

        
}
