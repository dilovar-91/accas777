<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'models'; // указываем имя таблицы явно


    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
}
