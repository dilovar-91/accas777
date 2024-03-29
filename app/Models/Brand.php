<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    public function models()
    {
        return $this->belongsTo('App\Models\CarModel', 'id','brand_id');
    }
}
