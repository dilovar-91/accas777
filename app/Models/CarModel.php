<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'models'; // указываем имя таблицы явно


    protected $fillable = [
        'name', 'brand_id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
