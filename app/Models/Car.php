<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function scopeSearchByBrand ($query, $brand) {
        if($brand) { 
            
            $query->where('brand', 'LIKE', "%$brand%");
     }
        return $query;

    }

    public function scopeSearchByModel ($query, $model) {
        if($model) { 
            
            $query->where('model', 'LIKE', "%$model%");
     }
        return $query;

    }



    protected $fillable = [
        'brand',
        'model',
        'year',
        'max_speed',
        'is_automatic',
        'engine',
        'number_of_doors',
    ];
}
