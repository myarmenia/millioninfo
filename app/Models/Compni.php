<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compni extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'imported',
        'type',
        'website_url',
        'director',
        'director_role',
        'facebook_url',
        'instagram_url',
        'spyur_category',
        'social_data_html',
        'social_data_text',
        'types_of_activitie',
        'images',
        'images_downloaded',
    ];
}
