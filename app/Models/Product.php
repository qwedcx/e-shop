<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // то что разрешено 
    public $fillable = [
        'title',
        'price',
        'description',
        'category_id',
        'path_img'
    ];
    // public $guarded = []; // - то что запрещено (все остальное можно)
}
