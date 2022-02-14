<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'categories_id',
        'name',
        'statuse'
    ];

    public function categoriesto(){

        return $this->belongsTo(Categories::class);
    }
}
